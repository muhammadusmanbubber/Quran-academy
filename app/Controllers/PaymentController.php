<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DonationPaymentModel;
use App\Models\UserModel;

class PaymentController extends BaseController
{
    public function paymentProcess()
    {
        \Stripe\Stripe::setApiKey('sk_test_51PseEjHiseu988hv3PmHnAtUXiheOF5dpNLanz5Jb1dIaTEG9jK0eAUv7aMsnTtQUw7O3OlueuP1kLKRyqkSQs9100D7EawK9L');
        try {
            // Check if user is logged in
            $session = session();
            $userId = $session->get('userid');
            $isLoggedIn = $userId ? true : false;
            // Retrieve form data
            $token = $this->request->getPost('stripeToken');
            $email = $this->request->getPost('email');
            $amount = $this->request->getPost('customAmount') ?: $this->request->getPost('amount'); // Fetching either custom or predefined amount
            $amount = (int)($amount * 100); // Converting to cents and ensuring it's an integer
            // Validate payment details
            if (empty($token) || empty($email) || $amount <= 0) {
                $session->setFlashdata('fail', 'Invalid payment details. Please check and try again.');
                return redirect()->to('/donation-form');
            }
            // Create a new customer with Stripe
            $customer = \Stripe\Customer::create([
                'email' => $email,
                'source' => $token,
            ]);
            if (!$customer || empty($customer->id)) {
                $session->setFlashdata('fail', 'Failed to create customer.');
                return redirect()->to('/donation-form');
            }
            // Create a charge for the customer
            $charge = \Stripe\Charge::create([
                'amount' => $amount, // Amount in cents
                'currency' => 'usd',
                'customer' => $customer->id, // Customer ID from the created customer
                'description' => 'Donation payment',
            ]);
            if ($charge->status !== 'succeeded') {
                $session->setFlashdata('fail', 'Payment failed, please try again.');
                return redirect()->to('/donation-form');
            }
            // Handle successful payment
            $donationPaymentModel = new DonationPaymentModel();
            if ($isLoggedIn) {
                $usersModel = new UserModel();
                // Update the donor status in the users table
                $usersModel->update($userId, ['doner' => 'active']);
                // Store donation payment record
                $donationPaymentModel->insert([
                    'user_id' => $userId,
                    'amount' => $amount / 100, // Convert back to dollars
                    'payment_date' => date('Y-m-d H:i:s'),
                    'payment_method' => 'Stripe',
                    'transaction_id' => $charge->id,
                    'payment_status' => 'Completed',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'donation_id' => 1,
                ]);
            } else {
                // User is not logged in: Create new user and insert payment record
                $usersModel = new UserModel();
                // Insert new user
                $userData = [
                    'username' => $this->request->getPost('username'),
                    'email' => $email,
                    'phone_number' => $this->request->getPost('phone_number'),
                    'doner' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $newUserId = $usersModel->insert($userData);
                // Store donation payment record
                $donationPaymentModel->insert([
                    'user_id' => $newUserId,
                    'amount' => $amount / 100, // Convert back to dollars
                    'payment_date' => date('Y-m-d H:i:s'),
                    'payment_method' => 'Stripe',
                    'transaction_id' => $charge->id,
                    'payment_status' => 'Completed',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'donation_id' => 1,
                ]);
            }
            // Set success message and redirect
            $session->setFlashdata('success', 'Thank you for your generosity! Your donation is making a difference and helping us achieve our mission. We deeply appreciate your support.');
            return redirect()->to('/donation');
        } catch (\Stripe\Exception\CardException $e) {
            $session->setFlashdata('fail', 'Card declined: ' . $e->getError()->message);
            return redirect()->to('/donation-form');
        } catch (\Stripe\Exception\ApiErrorException $e) {
            $session->setFlashdata('fail', 'Payment failed: ' . $e->getMessage());
            return redirect()->to('/donation-form');
        } catch (\Exception $e) {
            $session->setFlashdata('fail', $e->getMessage());
            return redirect()->to('/donation-form');
        }
    }
}

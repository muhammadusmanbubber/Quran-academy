<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Donation Table Section ======= -->
<style>
    .tab-content {
        display: none;
    }

    .tab-content.show {
        display: block;
    }

    .visa-icon {
        color: #1a1f71;
    }

    .mastercard-icon {
        color: #ff5f00;
    }

    .amex-icon {
        color: #0072ce;
    }
</style>
<div class="container py-5" style="margin-top: 50px;">
    <div class="mx-auto text-center">
        <h3 class="display-8 fw-bold text-secondary">Payment Methods</h3>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <!-- Payment Card form tabs -->
                    <div class="shadow-sm bg-white">
                        <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3">
                            <li class="nav-item">
                                <a data-toggle="pill" href="#credit-card" class="nav-link active">
                                    <i class="fas fa-credit-card mr-2"></i> Debit Card
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#paypal" class="nav-link">
                                    <i class="fab fa-paypal mr-2"></i> Paypal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#net-banking" class="nav-link">
                                    <i class="fas fa-mobile-alt mr-2"></i> Net Banking
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- credit card info-->
                    <div id="credit-card" class="tab-content show">
                        <!-- <form role="form" onsubmit="event.preventDefault()">
                            <div class="form-group">
                                <label for="username">
                                    <h6>Card Owner</h6>
                                </label>
                                <input type="text" name="username" placeholder="Card Owner Name" required class="form-control ">
                            </div>
                            <div class="form-group mt-3">
                                <label for="cardNumber">
                                    <h6>Card number</h6>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted" style="height: 40px;">
                                            <i class="fab fa-cc-visa mx-1 visa-icon fa-2x"></i>
                                            <i class="fab fa-cc-mastercard mx-1 mastercard-icon fa-2x"></i>
                                            <i class="fab fa-cc-amex mx-1 amex-icon fa-2x"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 mt-3">
                                    <div class="form-group">
                                        <label>
                                            <h6>Expiration Date</h6>
                                        </label>
                                        <div class="input-group">
                                            <input type="number" placeholder="MM" name="" class="form-control" required>
                                            <input type="number" placeholder="YY" name="" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="form-group mb-4">
                                        <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                        </label>
                                        <input type="text" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember_me">
                                    <label class="form-check-label" for="remember_me">Note: The checkbox confirms your payment securely.</label>
                                </div>
                            </div>
                            <div class="text-center p-3">
                                <button type="button" class="subscribe btn btn-info btn-block text-white fw-bold" style="width: 150px;">
                                    Confirm
                                </button>
                            </div>
                        </form> -->
                        <form id="payment-form">
                            <div class="form-group">
                                <label for="card-element">
                                    <h6>Card Details</h6>
                                </label>
                                <div id="card-element" class="form-control">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display form errors -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <div class="text-center p-3">
                                <button type="submit" class="subscribe btn btn-info btn-block text-white fw-bold" style="width: 150px;">
                                    Confirm
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-content">
                        <form role="form" onsubmit="event.preventDefault()">
                            <div class="form-group">
                                <label for="paypalEmail">
                                    <h6>PayPal Email Address</h6>
                                </label>
                                <input type="email" name="paypalEmail" placeholder="Your PayPal Email" required class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="paypalCardNumber">
                                    <h6>Card Number</h6>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="paypalCardNumber" placeholder="Valid card number" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted" style="height: 40px;">
                                            <i class="fab fa-cc-visa mx-1 visa-icon fa-2x"></i>
                                            <i class="fab fa-cc-mastercard mx-1 mastercard-icon fa-2x"></i>
                                            <i class="fab fa-cc-amex mx-1 amex-icon fa-2x"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 mt-3">
                                    <div class="form-group">
                                        <label>
                                            <h6>Expiration Date</h6>
                                        </label>
                                        <div class="input-group">
                                            <input type="number" placeholder="MM" name="expiryMonth" class="form-control" required>
                                            <input type="number" placeholder="YY" name="expiryYear" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="form-group mb-4">
                                        <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                        </label>
                                        <input type="text" name="cvv" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="subscribe btn btn-secondary btn-block">
                                Confirm Payment
                            </button>
                            <p class="text-muted mt-3">
                                Click to pay securely, then return here to view your order.
                            </p>
                        </form>
                    </div>
                    <!-- Bank transfer info -->
                    <div id="net-banking" class="tab-content">
                        <div class="mt-3">
                            <img src="assets/img/banks.png" alt="banks" style="height: 120px;width:600px;">
                        </div>
                        <div class="form-group mt-3">
                            <label for="Select Your Bank">
                                <h6 class="fw-bold">Select your Bank</h6>
                            </label>
                            <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>Select your bank</option>
                                <option>Bank Alfalah</option>
                                <option>Habib Bank Limited</option>
                                <option>United Bank Limited</option>
                                <option>Meezan Bank</option>
                                <option>Punjab Bank</option>
                                <option>Elied Bank</option>
                                <option>Bank Al-Islamic</option>
                                <option>Sunehri Bank</option>
                            </select>
                        </div>
                        <p class="text-muted mt-3">
                            Note: After clicking on the button, you will be directed to a secure gateway for payment.
                            After completing the payment process, you will be redirected back to the website to view details of your order.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="https://js.stripe.com/v3/"></script>
<!-- Function to handle Tab clicks -->
<script>
    $(document).ready(function() {
        function handleTabClick(targetId) {
            $('.nav-link').removeClass('active');
            $('.tab-content').removeClass('show');
            $('a[href="' + targetId + '"]').addClass('active');
            $(targetId).addClass('show');
        }
        handleTabClick('#credit-card');
        $('.nav-link').on('click', function(e) {
            e.preventDefault();
            var targetId = $(this).attr('href');
            handleTabClick(targetId);
        });
    });
</script>
<!-- Set up Stripe.js and Elements to use in checkout form -->
<script>
    var stripe = Stripe('pk_test_51PseEjHiseu988hvnlG8tFkJsJhcpSvg9Gv06IpYdcIqyZdSm9B8NM39g8Tpmko717TfnL7hHWgnv7dxywOsO0FO007joWU84P'); // Replace with your publishable key
    var elements = stripe.elements();

    // Create an instance of the card Element
    var card = elements.create('card');
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the token and the rest of your form to your server.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>
<?= $this->endSection() ?>
<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<style>
    .step {
        display: none;
    }

    .step.active {
        display: block;
    }

    .step-indicator {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    }

    .circle {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-weight: bold;
    }

    .circle.active {
        background-color: #28a745;
        /* Green for active steps */
    }

    .circle.inactive {
        background-color: white;
        color: #dc3545;
        border: 2px solid #dc3545;
    }

    .line {
        width: 50px;
        height: 4px;
        background-color: #f5f5f5;
        margin: 0 10px;
    }

    .line.active {
        background-color: #28a745;
        /* Green for completed steps */
    }

    .error {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }
</style>
<div class="container py-5" style="margin-top: 50px;">
    <!-- Step Indicator -->
    <div class="step-indicator">
        <div class="circle active" id="circle-1">1</div>
        <div class="line" id="line-1"></div>
        <div class="circle inactive" id="circle-2">2</div>
        <div class="line" id="line-2"></div>
        <div class="circle inactive" id="circle-3">3</div>
    </div>
    <!-- heading  -->
    <div class="mx-auto text-center">
        <h3 class="display-8 fw-bold text-secondary">Payment Methods</h3>
    </div>
    <!--success message-->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success text-center mb-4">
            <?php echo session()->get('success'); ?>
        </div>
    <?php endif; ?>
    <!--fail message-->
    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger text-center mb-4">
            <?php echo session()->get('fail'); ?>
        </div>
    <?php endif; ?>
    <!-- payment method form  -->
    <div class="row mt-1">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <form id="donation-form" action="<?= base_url('payment-process') ?>" method="post">
                        <!-- Step 1: Choose Donation Amount -->
                        <div class="step active" id="step-1">
                            <h5 class="text-primary fw-bold p-2">Select Donation Amount</h5>
                            <!-- Predefined amounts -->
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-primary btn-block amount-btn" data-amount="20">$20</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-primary btn-block amount-btn" data-amount="30">$30</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-primary btn-block amount-btn" data-amount="50">$50</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-primary btn-block amount-btn" data-amount="75">$75</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-primary btn-block amount-btn" data-amount="100">$100</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-primary btn-block amount-btn" data-amount="150">$150</button>
                                </div>
                            </div>
                            <!-- Custom amount -->
                            <div class="form-group">
                                <label for="customAmount" class="p-1 text-muted">Or ( Enter a custom amount )</label>
                                <input type="number" class="form-control p-2" id="customAmount" name="customAmount" min="1" placeholder="Enter custom amount">
                                <div id="amount-error" class="error"></div>
                            </div>
                            <a href="<?= base_url('donation') ?>"><button type="button" class="btn btn-secondary mt-3">Cancel</button></a>
                            <button type="button" class="btn btn-primary mt-3" onclick="validateStep1()">Next</button>
                        </div>
                        <!-- Step 2: Donor Personal Details -->
                        <div class="step" id="step-2">
                            <h5 class="text-primary fw-bold p-2">Enter Personal Details</h5>
                            <div class="form-group">
                                <label for="username">Full Name</label>
                                <input type="text" class="form-control" id="name" name="username" value="<?= set_value('username', $username) ?>" required>
                                <div id="name-error" class="error"></div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email', $email) ?>" required>
                                <div id="email-error" class="error"></div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="phone_number">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone_number" value="<?= set_value('phone_number', $phone_number) ?>">
                                <div id="phone-error" class="error"></div>
                            </div>
                            <button type="button" class="btn btn-secondary mt-2" onclick="prevStep(1)">Previous</button>
                            <button type="button" class="btn btn-primary mt-2" onclick="validateStep2()">Next</button>
                        </div>
                        <!-- Step 3: Payment Method with Stripe -->
                        <div class="step" id="step-3">
                            <h5 class="text-primary fw-bold p-2">Enter Payment Details</h5>
                            <div class="form-group">
                                <label for="card-element" class="text-muted">Credit or debit card</label>
                                <div id="card-element" class="form-control mt-2">
                                    <!-- Stripe Element will be inserted here -->
                                </div>
                                <!-- Used to display form errors -->
                                <div id="card-errors" role="alert" class="error"></div>
                            </div>
                            <button type="button" class="btn btn-secondary mt-3" onclick="prevStep(2)">Previous</button>
                            <button type="submit" class="btn btn-success mt-3">Submit Donation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<!-- Include Stripe.js -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    var selectedAmount = null;

    // Handle step navigation with validation
    function validateStep1() {
        var customAmount = document.getElementById('customAmount').value;
        if (selectedAmount || customAmount > 0) {
            nextStep(2);
            document.getElementById('amount-error').innerText = ''; // Clear error
        } else {
            document.getElementById('amount-error').innerText = 'Please select an amount or enter a custom amount.';
        }
    }

    function validateStep2() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;

        var emailRegex = /^\S+@\S+\.\S+$/;

        var valid = true;

        // Validate name
        if (!name) {
            document.getElementById('name-error').innerText = 'Please enter your full name.';
            valid = false;
        } else {
            document.getElementById('name-error').innerText = ''; // Clear error
        }

        // Validate email
        if (!emailRegex.test(email)) {
            document.getElementById('email-error').innerText = 'Please enter a valid email address.';
            valid = false;
        } else {
            document.getElementById('email-error').innerText = ''; // Clear error
        }

        // Validate phone
        if (!phone) {
            document.getElementById('phone-error').innerText = 'Please enter a valid phone number.';
            valid = false;
        } else {
            document.getElementById('phone-error').innerText = ''; // Clear error
        }

        // Proceed to the next step if all validations pass
        if (valid) {
            nextStep(3);
        }
    }

    function nextStep(step) {
        $('.step').removeClass('active');
        $('#step-' + step).addClass('active');
        updateStepIndicator(step);
    }

    function prevStep(step) {
        $('.step').removeClass('active');
        $('#step-' + step).addClass('active');
        updateStepIndicator(step);
    }

    // Update the step indicator visuals
    function updateStepIndicator(step) {
        for (var i = 1; i <= 3; i++) {
            if (i < step) {
                $('#circle-' + i).removeClass('inactive').addClass('active');
                $('#line-' + (i - 1)).addClass('active');
            } else if (i == step) {
                $('#circle-' + i).removeClass('inactive').addClass('active');
                $('#line-' + (i - 1)).addClass('active');
            } else {
                $('#circle-' + i).removeClass('active').addClass('inactive');
                $('#line-' + (i - 1)).removeClass('active');
            }
        }
    }

    // Stripe Elements setup
    var stripe = Stripe('pk_test_51PseEjHiseu988hvnlG8tFkJsJhcpSvg9Gv06IpYdcIqyZdSm9B8NM39g8Tpmko717TfnL7hHWgnv7dxywOsO0FO007joWU84P');
    var elements = stripe.elements();
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
    // Handle form submission.
    var form = document.getElementById('donation-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Disable the submit button to prevent repeated clicks
        form.querySelector('button[type="submit"]').disabled = true;

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;

                // Re-enable the submit button
                form.querySelector('button[type="submit"]').disabled = false;
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the Stripe token
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('donation-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }

    // Set selected amount on button click
    $('.amount-btn').click(function() {
        selectedAmount = $(this).data('amount');
        $('.amount-btn').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).removeClass('btn-outline-primary').addClass('btn-primary');
        $('#customAmount').val(''); // Clear custom amount when selecting predefined amount
    });

    // Clear selected amount if custom amount is entered
    $('#customAmount').on('input', function() {
        selectedAmount = null;
        $('.amount-btn').removeClass('btn-primary').addClass('btn-outline-primary');
    });
</script>
<?= $this->endSection() ?>
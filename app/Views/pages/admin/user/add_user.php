<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Add New Student</h2>
        </div>
        <!-----Add new Studen Form ----->
        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/users/save-user-form') ?>" class="mx-auto" style="max-width: 600px;">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label color_primary">Student Name<span class="required_show">*</span></label>
                    <input type="text" maxlength="15" class="form-control" name="username" value="<?= old('username') ?>" required>
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['username'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['username']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label color_primary">Email<span class="required_show">*</span></label>
                    <input type="email" class="form-control" name="email" value="<?= old('email') ?>" required>
                    <?php if (!empty($fieldErrors['email'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['email']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label color_primary">Mobile Number<span class="required_show">*</span></label>
                    <input type="text" id="mobile_no" pattern="[0-9]+" class="form-control" name="phone_number" value="<?= old('phone_number') ?>" required>
                    <?php if (!empty($fieldErrors['phone_number'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['phone_number']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label color_primary">Password <span class="required_show">*</span></label>
                    <div class="position-relative">
                        <input id="password-field" type="password" name="password" class="form-control" value="<?= old('password') ?>" required>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <span toggle="#password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                <img src="<?= base_url('assets/img/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                            </span>
                        </div>
                    </div>
                    <p id="password-error-container" class="text-danger"></p>
                    <?php if (!empty($fieldErrors['password'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['password']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-12 mb-4">
                    <label class="form-label color_primary">Confirm Password</label>
                    <div class="position-relative">
                        <input id="password-field2" type="password" name="confirm_password" class="form-control" value="<?= old('confirm_password') ?>" required>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <span toggle="#password-field2" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                <img src="<?= base_url('assets/img/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                            </span>
                        </div>
                    </div>
                    <p id="confirm-password-error-container" class="text-danger"></p>
                    <?php if (!empty($fieldErrors['confirm_password'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['confirm_password']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extraScript') ?>

<script>
    // ----Add User Validations---
    $(document).ready(function() {
        var numberInput = document.getElementById('mobile_no');

        // Add an event listener to validate input
        numberInput.addEventListener('input', function(event) {
            // Get the input value
            var inputValue = event.target.value;

            // Remove all non-numeric characters except '+'
            inputValue = inputValue.replace(/[^0-9+]/g, '');

            // Update the input value
            event.target.value = inputValue;
        });

        // Add custom validator for flexible mobile number format
        $.validator.addMethod("mobile_regex", function(value, element) {
            return this.optional(element) || /^\d{11,16}$/.test(value);
        }, "Please enter a valid phone number (11 to 16 digits)");

        // Add custom validator for password
        $.validator.addMethod("password_regex", function(value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>ยง~]).{8,25}$/.test(value);
        }, "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.");

        $('form').validate({
            errorPlacement: function(error, element) {
                if (element.attr("name") == "password") {
                    error.appendTo("#password-error-container");
                } else if (element.attr("name") == "confirm_password") {
                    error.appendTo("#confirm-password-error-container");
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                username: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8,
                    password_regex: true,
                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    equalTo: "#password-field",
                },
                phone_number: {
                    required: true,
                    mobile_regex: true,
                }
            },
            messages: {
                username: {
                    required: "Username is required",
                },
                email: {
                    required: "Email is required",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Password is required",
                    minlength: "Password must be at least 8 characters long",
                    password_regex: "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character."
                },
                confirm_password: {
                    required: "Confirm password is required",
                    minlength: "Confirm password must be at least 8 characters long",
                    equalTo: "Password and confirm password do not match"
                },
                phone_number: {
                    required: "Mobile number is required",
                    mobile_regex: "Please enter a valid phone number (11 to 16 digits)"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    // ----Display the message for 5 seconds---
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(function() {
                    alert.remove();
                }, 500);
            });
        }, 5000);
    });
    // ----Show Password---
    $(document).ready(function() {
        $(".toggle-password").click(function() {
            $(this).toggleClass("ti-eye ti-eye-off");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>

<?= $this->endSection() ?>
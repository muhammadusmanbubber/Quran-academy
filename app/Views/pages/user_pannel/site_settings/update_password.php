<?= $this->extend('all_template/layout') ?>

<?= $this->section('main_content') ?>

<!--Start success and fail session -->
<?php if (session()->get('success')) : ?>
    <div class="alert alert-success">
        <p>
            <?php echo session()->get('success') ?>
        </p>
    </div>
<?php endif; ?>

<?php if (session()->get('error')) : ?>
    <div class="alert alert-danger">
        <p>
            <?php echo session()->get('error') ?>
        </p>
    </div>
<?php endif; ?>
<!--End success and fail session -->

<!--Start form Validation -->
<?php
if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
    $validation = session()->get('validation');
    $fieldErrors = session()->get('errors');
} ?>
<!--End form Validation -->
<div class="container">
    <div class="row">
        <div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
            <div class="d-flex align-items-center mb-4">
                <h5 class="text-primary fw-bold mb-4">Update Password</h5>
            </div>
            <form action="<?= base_url('admin/setting/update_password') ?>" method="post" id="password-form">
                <div class="row">
                    <!-- ****** Old Password ****** -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <label class="form-label passenger_form_label color_primary mb-1">Old Password<span class="required_show">*</span></label>
                        <div class="position-relative">
                            <input id="old-password-field" name="old_password" required type="password" class="form-control sign_up_input" placeholder="******">
                            <!-- Show validation error -->
                            <?php if (!empty($fieldErrors['old_password'])) : ?>
                                <p class="text-danger"><?= $fieldErrors['old_password']; ?></p>
                            <?php endif; ?>
                            <div class="position-absolute top-50 end-0 translate-middle-y">
                                <span toggle="#old-password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
                        <p id="old-password-error-container"></p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <label class="form-label passenger_form_label color_primary mb-1">New Password<span class="required_show">*</span></label>
                        <div class="position-relative">
                            <input id="new-password-field" name="new_password" required type="password" class="form-control sign_up_input" placeholder="******">
                            <!-- Show validation error -->
                            <?php if (!empty($fieldErrors['new_password'])) : ?>
                                <p class="text-danger"><?= $fieldErrors['new_password']; ?></p>
                            <?php endif; ?>
                            <div class="position-absolute top-50 end-0 translate-middle-y">
                                <span toggle="#new-password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
                        <p id="new-password-error-container"></p>
                    </div>

                    <!-- ****** Confirm Password ****** -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <label class="form-label passenger_form_label color_primary mb-1">Confirm Password<span class="required_show">*</span></label>
                        <div class="position-relative">
                            <input id="confirm-password-field" name="confirm_password" required type="password" class="form-control sign_up_input" placeholder="******">
                            <!-- Show validation error -->
                            <?php if (!empty($fieldErrors['confirm_password'])) : ?>
                                <p class="text-danger"><?= $fieldErrors['confirm_password']; ?></p>
                            <?php endif; ?>
                            <div class="position-absolute top-50 end-0 translate-middle-y">
                                <span toggle="#confirm-password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
                        <p id="confirm-password-error-container"></p>
                    </div>
                </div>

                <div class="row">
                    <!-- ****** New Password ****** -->


                    <!-- ****** Update Button ****** -->
                    <div class="col-md-12 mb-4 text-end">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>

<!--  jQuery Script for form validation -->
<script>
    $(document).ready(function() {
        $("#password-form").validate({
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            },
            rules: {
                old_password: {
                    required: true,
                    minlength: 8
                },
                new_password: {
                    required: true,
                    minlength: 8,
                    password_regex: true
                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    equalTo: "#new-password-field"
                },
            },
            messages: {
                old_password: {
                    required: "Old Password is required",
                    minlength: "Old Password must be at least 8 characters long"
                },
                new_password: {
                    required: "New Password is required",
                    minlength: "New Password must be at least 8 characters long",
                    password_regex: "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character."
                },
                confirm_password: {
                    required: "Confirm Password is required",
                    minlength: "Confirm Password must be at least 8 characters long",
                    equalTo: "Password and Confirm Password do not match"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // Custom password regex method
        $.validator.addMethod(
            "password_regex",
            function(value, element) {
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>ยง~]).{8,25}$/.test(value);
            },
            "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character."
        );
    });
</script>

<?= $this->endSection() ?>
<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="card panel_card p-3" style="min-height: calc(100vh - 81px);">
    <div class="d-flex align-items-center mb-4">
        <a href="<?= base_url('/admin/profile') ?>" class="btn panel_back_btn text-decoration-none">
            <img src="<?= base_url('assets/images/svg/arrow_left_white.svg') ?>" alt="">
        </a>
        <h5 class="my-auto ms-4">Edit Profile</h5>
    </div>
    <form action="<?php echo base_url('admin/edit-profile') ?>" method="post">
        <div class="row">


            <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">
                    Profile Image
                </label>
                <div action="upload" id="profile-pic" class="dropzone dropzone_main needsclick dz-clickable">
                    <div class="dz-message needsclick">
                        <span class="text">
                            <?php
                            if (!empty($userrecord['profile_pic'])) {
                                $image = base_url('uploads/profile/images/' . $userrecord['profile_pic']);
                                $style = 'width:150px; height:150px;';
                            } else {
                                $image = base_url('assets/img/svg/panel_svg/upload_icon.svg');
                                $style = '';
                            }
                            ?>
                            <img style="<?= $style ?>" src="<?= $image ?>" alt="">
                            <span class="text_light">Drag and drop Cover image, or <span class="text_orange">Browse</span></span>
                        </span>
                    </div>
                </div>
                <input type="hidden" id="profile-image" value="" name="profile_img">
                <input type="hidden" name="is_service" id="is_service_input" value="false">
            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Username<span class="required_show">*</span></label>
                <input type="text" class="form-control passenger_form_input" required value="<?= $userrecord['username'] ?>" placeholder="Atif" name="first_name">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['first_name'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['first_name']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Gender<span class="required_show">*</span></label>
                <select class="form-select passenger_form_select_input passenger_form_input" required name="gender">
                    <option value='male' <?= $userrecord['gender'] == 'male' ? 'selected' : ''  ?>>Male</option>
                    <option value="female" <?= $userrecord['gender'] == 'female' ? 'selected' : ''  ?>>Female</option>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['gender'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['gender']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Date of birth</label>
                <input type="date" class="form-control passenger_form_input" placeholder="Enter your dob" name="date_of_birth" value="<?= $userrecord['dateofbirth'] ?>">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['date_of_birth'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['date_of_birth']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Email<span class="required_show">*</span></label>
                <input type="text" class="form-control passenger_form_input" readonly required placeholder="atifkhan@gmail.com" name="email" value="<?= $userrecord['email'] ?>">

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['email'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['email']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>

            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Phone Number<span class="required_show">*</span></label>
                <!-- <input type="number" class="form-control passenger_form_input" required placeholder="03018138901" name="phone_no" min='0' value="<?= $userrecord['mobile'] ?>"> -->
                <input type="text" class="form-control passenger_form_input" required placeholder="Enter your Phone Number" min='0' id="numberInput" pattern="[0-9]+" name="phone_no" title="Please enter numbers only" value="<?= $userrecord['mobile'] ?>">
                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['phone_no'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['phone_no']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Country</label>
                <select class="form-select passenger_form_select_input passenger_form_input" required name="country_id" id="countrySelect">
                    <option value="">Select country</option>

            </div>
            <!-- <div class="col-md-6 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">State</label>
                <?php

                // var_dump($userrecord['state_id']);
                ?>
                <select class="form-select passenger_form_select_input passenger_form_input" required name="state">
                    <option value="1" <?= $userrecord['state_id'] == 1 ? 'selected' : ''  ?>>UAE</option>
                    <option value="2" <?= $userrecord['state_id'] == 2 ? 'selected' : ''  ?>>Pakistan</option>
                </select>

                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['state'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['state']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div> -->
            <!-- <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Password<span class="required_show">*</span></label>
                <div class="position-relative">
                    <input id="password-field" name="password" required type="password" class="form-control sign_up_input" placeholder="******">
                    <div class="position-absolute top-50 end-0 translate-middle-y">
                        <span toggle="#password-field" class="ti ti-eye-off field-icon toggle-password me-3" style="cursor: pointer;">
                            <img src="<?= base_url('assets/images/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                        </span>
                    </div>
                </div>
                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['password'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['password']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
                <p id="password-error-container"></p>
            </div> -->
            <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">Address</label>
                <textarea class="form-control passenger_form_input h-auto" name="address" rows="4" placeholder="House#123"><?= $userrecord['address'] ?></textarea>
                <?php
                /********Start Show Name Validation Error*********/
                if (!empty($fieldErrors['address'])) : ?>
                    <p class="text-danger">
                        <?= $fieldErrors['address']; ?>
                    </P>
                <?php
                endif
                /********End Name Validation Error*********/
                ?>
            </div>

            <div class="col-md-12 mb-4 text-end">
                <button type="submit" class="btn btn_primary px-4">Save</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script>
    $(document).ready(function() {

        // Form submission validation
        $('form').on('submit', function(event) {
            var countrySelect = $('#countrySelect').val();
            if (countrySelect === "") {
                alert('Please select a country.');
                event.preventDefault(); // Prevent form submission
            }
        });

        // Input validation for phone number
        var numberInput = document.getElementById('phone_no');
        numberInput.addEventListener('input', function(event) {
            // Get the input value
            var inputValue = event.target.value;

            // Remove all non-numeric characters except '+'
            inputValue = inputValue.replace(/[^0-9+]/g, '');

            // Update the input value
            event.target.value = inputValue;
        });

        // jQuery validation
        $('form').validate({
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            rules: {
                username: {
                    required: true,
                },
                fathername: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                phone_no: {
                    required: true,
                    minlength: 9
                },
                whatsapp: {
                    required: true
                },
                skype: {
                    required: false
                },
                address: {
                    required: true
                },
                classes_per_week: {
                    required: true
                },
                contact_time: {
                    required: true
                },
                teacher_gender: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                language: {
                    required: true
                },
                courses: {
                    required: true
                },
                referred: {
                    required: true
                },
                agree_terms: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Student Name is required",
                },
                fathername: {
                    required: "Guardian/Parent Name is required",
                },
                email: {
                    required: "Email is required",
                    email: "Please enter a valid email address"
                },
                phone_no: {
                    required: "Phone number is required",
                    minlength: "Mobile Number must be at least 9 characters long"
                },
                whatsapp: {
                    required: "Whatsapp number is required"
                },
                skype: {
                    required: "Skype ID is optional"
                },
                address: {
                    required: "Address is required"
                },
                classes_per_week: {
                    required: "Classes per week is required"
                },
                contact_time: {
                    required: "Best contact time is required"
                },
                teacher_gender: {
                    required: "Please select a gender for the teacher",
                },
                country: {
                    required: "Country selection is required",
                },
                state: {
                    required: "State/Province is required",
                },
                language: {
                    required: "Language selection is required",
                },
                courses: {
                    required: "Please select a course",
                },
                referred: {
                    required: "Please specify how you were referred",
                },
                agree_terms: {
                    required: "You must agree to the terms and conditions"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // File uploader initialization
        initializeFileUploader(
            '#profile-pic',
            '<?php echo base_url('admin/upload-resized-images') ?>',
            '<?= base_url() ?>',
            1,
            '#profile-image',
            'image/jpeg,image/png,image/jpg', {
                'directory': 'uploads/profile/images/',
                'dir_folder': 'images',
                'dimensionsWithPath': JSON.stringify([{
                    thumbnail_path: 'thumbnail40-40',
                    width: '40',
                    height: '40'
                }])
            }
        );
    });
</script>

<?= $this->endSection() ?>
<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- success Message session -->
<?php if (session()->get('success')) : ?>
    <div class="alert alert-success mx-auto">
        <p class="mb-0">
            <?php echo session()->get('success') ?>
        </p>
    </div>
<?php endif; ?>
<!--Error Message session -->
<?php if (session()->get('fail')) : ?>
    <div class="alert alert-danger mx-auto">
        <p class="mb-0">
            <?php echo session()->get('fail') ?>
        </p>
    </div>
<?php endif; ?>
<!--Form Validation -->
<?php
if (!empty(session()->get('validation')) || !empty(session()->get('fieldErrors'))) {
    $validation = session()->get('validation');
    $fieldErrors = session()->get('fieldErrors');
}
?>
<div class="container">
    <div class="row">
        <div class="card panel_card p-3 mb-3">
            <!-- Go back page and Heading -->
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-primary fw-bold">Instructor Detail</h2>
                <img src="<?= base_url('assets/upload/job_applications/profile/' . esc($instructor['profile_image'])) ?>" alt="Profile Image" class="img-fluid border shadow" style="max-width: 150px;">
                <img src="<?= base_url('assets/upload/job_applications/idcards/' . esc($instructor['id_card_pic_front'])) ?>" alt="Profile Image" class="img-fluid border shadow" style="max-width: 150px;">
                <img src="<?= base_url('assets/upload/job_applications/idcards/' . esc($instructor['id_card_pic_back'])) ?>" alt="Profile Image" class="img-fluid border shadow" style="max-width: 150px;">
            </div>
            <!-- Basic Information Section -->
            <div class="card panel_card p-3">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Basic Information</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Instructor Name</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['instructor_name']) ?>
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Email</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['email']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Phone Number</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['phone_no']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Date of Birth</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['date_of_birth']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Gender</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['gender']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">CNIC No.</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['id_card_no']) ?></label>
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Country</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['country']) ?></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Address</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['address']) ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Information Section -->
            <div class="card panel_card p-3">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Qualification Information</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Selected Course</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['course_id']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Specialization</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['specialization']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">English Level</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['english_level']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Other Skills</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['other_skills']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Certificate</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['certificate']) ?></label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Desired Pay</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['desired_pay']) ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Media Links Section -->
            <div class="card panel_card p-3 mb-3">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Social Media Information</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Facebook</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['facebook']) ?></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Twitter (X)</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['twiter']) ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">Instagram</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['instagram']) ?></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text-primary fw-bold text_medium mb-0">YouTube</p>
                            <label class="form-label passenger_form_label color_primary"><?= esc($instructor['youtube']) ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
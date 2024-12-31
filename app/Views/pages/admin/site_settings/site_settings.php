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
                <h2 class="text-primary fw-bold mb-4">Site Settings</h2>
                <a href="<?= base_url('admin/cources/add-cource') ?>" class="btn btn-success mb-4">Update Settings</a>
            </div>
            <!-- Basic Information Section  -->
            <div class="card panel_card p-3 mb-3" scroll-target="product_feature">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Basic Information</h6>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Site Name</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>

                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Site Short Name</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Site URL</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Site Email</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Info Email</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Bookie Email</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Information Section  -->
            <div class="card panel_card p-3 mb-3" scroll-target="product_feature">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Contact Information</h6>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Phone Number</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Mobile Number</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">WhatsApp Number</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Address</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Media Links Section  -->
            <div class="card panel_card p-3 mb-3" scroll-target="product_feature">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Social Media Information</h6>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Facebook</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Twitter (X)</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Instagram</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">YouTube</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bank Details section  -->
            <div class="card panel_card p-3 mb-3" scroll-target="product_feature">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Bank Account Information</h6>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Bank Name</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Bank Account Number</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                    <div class="row" scroll-target="basic_info">
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Bank Account Name</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                        <div class="col-md-6 mb-2">
                            <p class="text_orange text_medium mb-0">Bank Account Description</p>
                            <label class="form-label passenger_form_label color_primary"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your toggle button code -->
            <div class="card panel_card p-3 mb-3" scroll-target="product_feature">
                <div id="product_table1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="my-auto fw-bold">Enable Payment Method</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
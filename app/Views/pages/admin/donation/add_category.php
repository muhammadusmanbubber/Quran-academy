<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <!-- success Message session -->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success">
            <p>
                <?php echo session()->get('success') ?>
            </p>
        </div>
    <?php endif; ?>
    <!--Error Message session -->
    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger">
            <p>
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
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Add Category</h2>
        </div>
        <!-----Add Course Form ----->
        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/donation/save-category') ?>">
            <div class="row mb-3" scroll-target="basic_info">
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Category Title<span class="required_show">*</span></label>
                    <input type="text" class="form-control passenger_form_input" placeholder="Course Name" name="title" value="<?= old('title') ?>">
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('title')) : ?>
                        <p class="text-danger"><?= $validation->getError('title'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Status<span class="required_show">*</span></label>
                    <select class="form-select bg-white" name="status">
                        <option disabled selected>Select Course Status</option>
                        <option value="active" <?= old('status') == 'active' ? 'selected' : '' ?>>Active</option>
                        <option value="inactive" <?= old('status') == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('status')) : ?>
                        <p class="text-danger"><?= $validation->getError('status'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row" scroll-target="basic_info">
                <div class="col-md-12 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Description<span class="required_show">*</span></label>
                    <textarea class="form-control" placeholder="Course Description" name="description"><?= old('description') ?></textarea>
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('description')) : ?>
                        <p class="text-danger"><?= $validation->getError('description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4 mt-3">
                    <label class="form-label passenger_form_label color_primary mb-2">
                        Category Image <span class="required_show">*</span>
                    </label>
                    <div id="images" action="upload" class="dropzone dropzone_main needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <img src="<?= base_url('assets/img/svg/panel_svg/upload_icon.svg') ?>" alt="">
                                <span class="text_light">Drag and drop category image, or <span class="text_orange">Browse</span></span>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="profile-image" name="images">
                    <input type="hidden" name="is_service" id="is_service_input" value="false">
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('images')) : ?>
                        <p class="text-danger"><?= $validation->getError('images'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="row" scroll-target="basic_info">
                <div class="col-md-12 mb-2 text-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<!-----Script for Form Validation ----->
<script>
    // ----Upload the image---
    initializeFileUploader(
        '#images',
        '<?php echo base_url('user/cources/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#profile-image',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'assets/upload/donation/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail40-40',
                width: '300',
                height: '420'
            }, ])
        }
    );
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
</script>
<?= $this->endSection() ?>
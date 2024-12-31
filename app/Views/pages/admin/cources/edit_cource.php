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
            <h2 class="text-primary fw-bold mb-4">Edit Course</h2>
        </div>
        <!-----Add Course Form ----->
        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/cources/save-edit-cource/' . $course['course_id']) ?>">
            <div class="row" scroll-target="basic_info">
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Course Name<span class="required_show">*</span></label>
                    <input type="text" class="form-control passenger_form_input" placeholder="Course Name" name="course_name" value="<?= old('course_name', $course['course_name']) ?>">
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('course_name')) : ?>
                        <p class="text-danger"><?= $validation->getError('course_name'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Price<span class="required_show">*</span></label>
                    <input type="text" class="form-control passenger_form_input" placeholder="Price" name="price" value="<?= old('price', $course['price']) ?>">
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('price')) : ?>
                        <p class="text-danger"><?= $validation->getError('price'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row" scroll-target="basic_info">
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Course Duration<span class="required_show">*</span></label>
                    <input type="text" class="form-control passenger_form_input" placeholder="Maximum Course Duration" name="course_duration" value="<?= old('course_duration', $course['course_duration']) ?>">
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('course_duration')) : ?>
                        <p class="text-danger"><?= $validation->getError('course_duration'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Status</label>
                    <select class="form-select bg-white" name="status">
                        <option disabled>Select Course Status</option>
                        <option value="active" <?= old('status', $course['status']) == 'active' ? 'selected' : '' ?>>Active</option>
                        <option value="inactive" <?= old('status', $course['status']) == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('status')) : ?>
                        <p class="text-danger"><?= $validation->getError('status'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-12 mb-4 mt-3">
                <label class="form-label passenger_form_label color_primary mb-2">
                    Course Cover Image
                </label>
                <div id="cover_image" action="upload" class="dropzone dropzone_main needsclick dz-clickable">
                    <div class="dz-message needsclick">
                        <span class="text">
                            <img src="<?= old(base_url('assets/img/svg/panel_svg/upload_icon.svg'), base_url('assets/upload/courses/' . $course['cover_image'])) ?>" alt="Course cover image" style="height: 200px; width: 160px;">
                            <span class="text_light">Drag and drop course cover image, or <span class="text_orange">Browse</span></span>
                        </span>
                    </div>
                </div>
                <p>Note: Upload atleast one cover image of dimension 300x400</p>
                <input type="hidden" id="profile-image" name="cover_image" value="<?= old('cover_image', $course['cover_image']) ?>">
                <!-- Validation Error -->
                <?php if (isset($validation) && $validation->hasError('cover_image')) : ?>
                    <p class="text-danger"><?= $validation->getError('cover_image'); ?></p>
                <?php endif; ?>
            </div>
            <div class="row" scroll-target="basic_info">
                <div class="col-md-12 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Description<span class="required_show">*</span></label>
                    <textarea class="form-control" placeholder="Course Description" name="description" rows="4" cols="50"><?= old('description', $course['description']) ?></textarea>
                    <!-- Validation Error -->
                    <?php if (isset($validation) && $validation->hasError('description')) : ?>
                        <p class="text-danger"><?= $validation->getError('description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="row" scroll-target="basic_info">
                <div class="col-md-12 mb-2 text-end">
                    <button type="submit" class="btn btn-success">Update</button>
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
        '#cover_image',
        '<?php echo base_url('user/cources/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#profile-image',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'assets/upload/courses/',
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
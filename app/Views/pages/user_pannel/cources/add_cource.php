<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Add Cources</h2>
        </div>
        <!-----Add Cource Form ----->
        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/system/system_configration_add_agents_form') ?>">
            <div class="row" scroll-target="basic_info">
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Course Name<span class="required_show">*</span></label>
                    <input type="text" class="form-control passenger_form_input" placeholder="Course Name" name="course_name" value="<?= old('course_name') ?>">
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['course_name'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['course_name']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Price<span class="required_show">*</span></label>
                    <input type="text" class="form-control passenger_form_input" placeholder="Price" name="price" value="<?= old('price') ?>">
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['price'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['price']; ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="row" scroll-target="basic_info">
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Start Date<span class="required_show">*</span></label>
                    <input type="date" class="form-control passenger_form_input" name="start_date" value="<?= old('start_date') ?>">
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['start_date'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['start_date']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">End Date<span class="required_show">*</span></label>
                    <input type="date" class="form-control passenger_form_input" name="end_date" value="<?= old('end_date') ?>">
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['end_date'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['end_date']; ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="row" scroll-target="basic_info">
                <div class="col-md-6 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Status</label>
                    <select class="form-select" name="status">
                        <option value="active" <?= old('status') == 'active' ? 'selected' : '' ?>>Active</option>
                        <option value="inactive" <?= old('status') == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['status'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['status']; ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label class="form-label passenger_form_label color_primary mb-1">
                    Cource Image <span class="required_show">*</span>
                </label>
                <div action="upload" id="category-pic" class="dropzone dropzone_main needsclick dz-clickable">
                    <div class="dz-message needsclick">
                        <span class="text">
                            <img src="<?= base_url('assets/img/svg/panel_svg/upload_icon.svg') ?>" alt="">
                            <span class="text_light">Drag and drop Cover image, or <span class="text_orange">Browse</span></span>
                        </span>
                    </div>
                </div>
                <input type="hidden" id="category-image" value="" name="category_img">
                <input type="hidden" name="is_service" id="is_service_input" value="false">
            </div>
            <div class="row" scroll-target="basic_info">
                <div class="col-md-12 mb-2">
                    <label class="form-label passenger_form_label color_primary mb-1">Description<span class="required_show">*</span></label>
                    <textarea class="form-control" placeholder="Course Description" name="description" rows="4" cols="50"><?= old('description') ?></textarea>
                    <!-- Validation Error -->
                    <?php if (!empty($fieldErrors['description'])) : ?>
                        <p class="text-danger"><?= $fieldErrors['description']; ?></p>
                    <?php endif ?>
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
<!-----Script for dropzone image ----->
<script>
    initializeFileUploader(
        '#category-pic',
        '<?php echo base_url('admin/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#category-image',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/categories/images/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail90-90',
                width: '90',
                height: '90'
            }, ])
        }
    );
</script>
<?= $this->endSection() ?>
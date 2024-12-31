<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Add New Teacher</h2>
        </div>
        <!-----Add new Studen Form ----->
        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/teachers/save-teacher-form') ?>" class="mx-auto" style="max-width: 600px;">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label color_primary">Student Name<span class="required_show">*</span></label>
                    <input type="text" class="form-control" name="username" value="<?= old('username') ?>" required>
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
                <input type="hidden" name="instructor_id" value="<?= esc($instructor_id) ?>">
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
<?= $this->endSection() ?>
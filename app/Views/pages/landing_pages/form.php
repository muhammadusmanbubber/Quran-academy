<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Welcome Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container mt-5">
        <div class="row mt-5">
            <form method='post' action='<?= base_url('form_submit') ?>'>
                <!-- this section is for User detail  -->
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" maxlength="15" class="form-control" name='username' value="<?= old('username') ?>" placeholder="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name='email' value="<?= old('email') ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile No</label>
                    <input type="text" id="mobile_no" pattern="[0-9]+" class="form-control" name='phone_number' value="<?= old('phone_number') ?>">
                </div>
                <!-- this section is for Subject Detail  -->
                <h5 class="text-muted">Subject Details</h5>
                <div class="mb-3">
                    <label class="form-label">Subject Name</label>
                    <input type="text" class="form-control" name='name' value="<?= old('name') ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Subject Detail</label>
                    <input type="text" class="form-control" name='detail' value="<?= old('detail') ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fee Charges</label>
                    <input type="number" id="mobile_no" class="form-control" name='fee' value="<?= old('fee') ?>">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="align-middle table-success">
                        <th class="border-bottom text-center text-primary" style="width:10px;">username</th>
                        <th class="border-bottom text-center text-primary" style="width:10px;">email</th>
                        <th class="border-bottom text-center text-primary" style="width:10px;">phone_number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($user_detail[0]) && is_array($user_detail[0])): ?>
                        <?php foreach ($user_detail[0] as $value): ?>
                            <tr>
                                <td><?= esc($value['username']) ?></td>
                                <td><?= esc($value['email']) ?></td>
                                <td><?= esc($value['phone_number']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">No courses available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
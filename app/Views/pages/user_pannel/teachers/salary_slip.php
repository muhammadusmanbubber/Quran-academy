<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-primary">
            <h3 class="mb-0">Teacher Salary Slip Report</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Teacher Name:</strong> John Doe</p>
                    <p><strong>Month:</strong> July 2024</p>
                </div>
                <div class="col-md-6 text-right">
                    <p><strong>Salary Slip No:</strong> 12345</p>
                    <p><strong>Date:</strong> 2024-07-31</p>
                </div>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th>Description</th>
                        <th>Amount (USD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic Salary</td>
                        <td>$2000</td>
                    </tr>
                    <tr>
                        <td>Allowances</td>
                        <td>$500</td>
                    </tr>
                    <tr>
                        <td>Deductions</td>
                        <td>$200</td>
                    </tr>
                    <tr>
                        <td><strong>Net Salary</strong></td>
                        <td><strong>$2300</strong></td>
                    </tr>
                </tbody>
            </table>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>Thank you for your hard work and dedication.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <p><strong>Authorized Signature:</strong></p>
                    <p>________________________</p>
                </div>
                <div class="col-md-6 text-right">
                    <p><strong>Teacher Signature:</strong></p>
                    <p>________________________</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Teacher Salary Slip</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/salaries/generate_salary_slip') ?>">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Teacher Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Teacher Name" name="teacher_name" value="<?= old('teacher_name') ?>" required>
                        <?php if (!empty($fieldErrors['teacher_name'])) : ?>
                            <p class="text-danger"><?= $fieldErrors['teacher_name']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Month<span class="text-danger">*</span></label>
                        <input type="month" class="form-control" name="salary_month" value="<?= old('salary_month') ?>" required>
                        <?php if (!empty($fieldErrors['salary_month'])) : ?>
                            <p class="text-danger"><?= $fieldErrors['salary_month']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Basic Salary<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Basic Salary" name="basic_salary" value="<?= old('basic_salary') ?>" required>
                        <?php if (!empty($fieldErrors['basic_salary'])) : ?>
                            <p class="text-danger"><?= $fieldErrors['basic_salary']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Allowances</label>
                        <input type="text" class="form-control" placeholder="Allowances" name="allowances" value="<?= old('allowances') ?>">
                        <?php if (!empty($fieldErrors['allowances'])) : ?>
                            <p class="text-danger"><?= $fieldErrors['allowances']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Deductions</label>
                        <input type="text" class="form-control" placeholder="Deductions" name="deductions" value="<?= old('deductions') ?>">
                        <?php if (!empty($fieldErrors['deductions'])) : ?>
                            <p class="text-danger"><?= $fieldErrors['deductions']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Net Salary<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Net Salary" name="net_salary" value="<?= old('net_salary') ?>" required>
                        <?php if (!empty($fieldErrors['net_salary'])) : ?>
                            <p class="text-danger"><?= $fieldErrors['net_salary']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3 text-center">
                        <button type="submit" class="btn btn-success">Generate Salary Slip</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->

<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
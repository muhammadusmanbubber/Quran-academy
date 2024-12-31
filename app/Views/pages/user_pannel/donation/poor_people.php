<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Poor People Donation Report</h2>
            <a href="<?= base_url('admin/cources/add-cource') ?>" class="btn btn-success mb-4">Add Donation</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Donations</h5>
                        <p class="card-text ">Amount: $5,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Donors</h5>
                        <p class="card-text">Count: 120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pending Requests</h5>
                        <p class="card-text">Count: 15</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h2>Recent Donations</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead class="align-middle table-success">
                        <tr>
                            <th>Sr#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>$100</td>
                            <td>2024-07-25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>$150</td>
                            <td>2024-07-24</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>$100</td>
                            <td>2024-07-25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>$150</td>
                            <td>2024-07-24</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>$100</td>
                            <td>2024-07-25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>$150</td>
                            <td>2024-07-24</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>$100</td>
                            <td>2024-07-25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>$150</td>
                            <td>2024-07-24</td>
                        </tr>
                        <tr class="total-row">
                            <td colspan="3">Total Amount</td>
                            <td>$250</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
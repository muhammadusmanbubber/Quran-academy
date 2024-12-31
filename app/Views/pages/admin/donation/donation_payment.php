<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Donation Payment Report</h2>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Donors</h5>
                    <p class="card-text">Count: <?= $totalDonors ?></p>
                </div>
            </div>
        </div>
        <?php foreach ($donationsByCategory as $category => $amount): ?>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($category) ?></h5>
                        <p class="card-text">Total Amount: $<?= number_format($amount, 2) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <h5 class="fw-bold">Recent Donations</h5>
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead class="align-middle table-success">
                        <tr>
                            <th>Sr#</th>
                            <th>Donor Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Donation Category</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($recentDonations)): ?>
                            <?php foreach ($recentDonations as $index => $donation): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= esc($donation['username']) ?></td>
                                    <td><?= esc($donation['email']) ?></td>
                                    <td><?= esc($donation['phone_number']) ?></td>
                                    <td><?= esc($donation['donation_category']) ?></td>
                                    <td>$<?= number_format($donation['amount'], 2) ?></td>
                                    <td><?= date('Y-m-d', strtotime($donation['payment_date'])) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No recent donations found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
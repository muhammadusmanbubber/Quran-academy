<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- user or doner interface view contaienr  -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">Help Build Houses</h1>
            <p class="lead">Your generous donations can provide shelter to those in need.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Make a Donation</h5>
                    <form>
                        <div class="mb-3">
                            <label for="donorName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="donorName" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="donorEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="donorEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="donationAmount" class="form-label">Donation Amount</label>
                            <input type="number" class="form-control" id="donationAmount" placeholder="Enter donation amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="donorMessage" class="form-label">Message (Optional)</label>
                            <textarea class="form-control" id="donorMessage" rows="3" placeholder="Leave a message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Donate Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Why Donate?</h5>
                    <p class="card-text">Your donations help us:</p>
                    <ul>
                        <li>Provide safe shelter</li>
                        <li>Support families</li>
                        <li>Improve living conditions</li>
                        <li>Offer security and stability</li>
                    </ul>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Contact Us</h5>
                    <p class="card-text">If you have any questions or need assistance, please contact us:</p>
                    <p class="mb-0"><strong>Email:</strong> support@charity.com</p>
                    <p class="mb-0"><strong>Phone:</strong> (123) 456-7890</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Recent Donations</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
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
                        <tr class="bg-primary text-white">
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
<!-- dmin pannel interface view container  -->
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Donations</h5>
                    <p class="card-text">Amount: $10,000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Donors</h5>
                    <p class="card-text">Count: 200</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pending Requests</h5>
                    <p class="card-text">Count: 10</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <h2>Recent Donations</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
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
                        <tr class="bg-primary text-white">
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
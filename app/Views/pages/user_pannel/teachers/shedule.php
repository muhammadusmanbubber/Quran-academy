<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>

<div class="container">
    <div class="card">
        <div class="card-header text-primary">
            <h3 class="mb-0">Teacher Lecture Schedule</h3>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <p><strong>Teacher Name:</strong> John Doe</p>
                </div>
                <div class="col-md-6 text-right">
                    <p><strong>Week:</strong> 29 July 2024 - 4 August 2024</p>
                </div>
            </div>
            <table class="table table-bordered schedule-table">
                <thead>
                    <tr>
                        <th class="day-header">Time</th>
                        <th class="day-header">Monday</th>
                        <th class="day-header">Tuesday</th>
                        <th class="day-header">Wednesday</th>
                        <th class="day-header">Thursday</th>
                        <th class="day-header">Friday</th>
                        <th class="day-header">Saturday</th>
                        <th class="day-header">Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>9:00 AM - 10:00 AM</th>
                        <td>Math</td>
                        <td>Physics</td>
                        <td>Math</td>
                        <td>Physics</td>
                        <td>Math</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>10:00 AM - 11:00 AM</th>
                        <td>English</td>
                        <td>Chemistry</td>
                        <td>English</td>
                        <td>Chemistry</td>
                        <td>English</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>11:00 AM - 12:00 PM</th>
                        <td>History</td>
                        <td>Biology</td>
                        <td>History</td>
                        <td>Biology</td>
                        <td>History</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>12:00 PM - 1:00 PM</th>
                        <td>Geography</td>
                        <td>Computer Science</td>
                        <td>Geography</td>
                        <td>Computer Science</td>
                        <td>Geography</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>1:00 PM - 2:00 PM</th>
                        <td>Lunch Break</td>
                        <td>Lunch Break</td>
                        <td>Lunch Break</td>
                        <td>Lunch Break</td>
                        <td>Lunch Break</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>2:00 PM - 3:00 PM</th>
                        <td>Art</td>
                        <td>Math</td>
                        <td>Art</td>
                        <td>Math</td>
                        <td>Art</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>3:00 PM - 4:00 PM</th>
                        <td>Sports</td>
                        <td>English</td>
                        <td>Sports</td>
                        <td>English</td>
                        <td>Sports</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>4:00 PM - 5:00 PM</th>
                        <td>Chemistry</td>
                        <td>Physics</td>
                        <td>Chemistry</td>
                        <td>Physics</td>
                        <td>Chemistry</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>Note: The schedule is subject to change based on availability and other factors.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<!--Dashboard-->
<div class="container">
  <!--Statistics-->
  <div class="row">
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Total Courses</h5>
        <h3 class="card-text text-primary mb-1"><?= $totalCourses ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Donation Category</h5>
        <h3 class="card-text text-primary mb-1"><?= $totalDonationCategory ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Total Donners</h5>
        <h3 class="card-text text-warning mb-1"><?= $totalDoners ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Donation payment</h5>
        <h3 class="card-text text-info mb-1">PKR <?= number_format($totalamount, 2); ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Job Applications</h5>
        <h3 class="card-text text-warning mb-1"><?= $jobApplications ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Teachers</h5>
        <h3 class="card-text text-info mb-1"><?= $total_teachers ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Registered Childs</h5>
        <h3 class="card-text text-primary mb-1"><?= $totalStudents ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Assigned Students</h5>
        <h3 class="card-text text-success mb-1"><?= $student_assigned ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Total Users</h5>
        <h3 class="card-text text-warning mb-1"><?= $totalUsers ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Bank Accounts</h5>
        <h3 class="card-text text-info mb-1"><?= $total_bank ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2"> Total Products</h5>
        <h3 class="card-text text-primary mb-1"><?= $totalUsers ?></h3>
      </div>
    </div>
    <div class="col-md-3 mb-2 shadow-sm">
      <div class="card p-3 rounded shadow-sm mb-md-0">
        <h5 class="card-title text-muted mb-2">Certified Students</h5>
        <h3 class="card-text text-success mb-1"><?= $totalUsers ?></h3>
      </div>
    </div>
  </div>
  <!--Charts-->
  <div class="row">
    <div class="col-lg-7">
      <canvas id="studentProgress"></canvas>
    </div>
    <div class="col-md-5 text-center">
      <h4 class="text-primary mt-2 mb-2">Summary Status</h4>
      <div class="status-summary-chart-wrapper">
        <canvas id="classDistribution" style="max-height: 300px; height: 300px;"></canvas>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Student Progress Chart
    var ctxLine = document.getElementById('studentProgress').getContext('2d');
    new Chart(ctxLine, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'Student Progress',
          data: [20, 35, 40, 55, 60, 65, 70],
          borderColor: 'rgba(54, 162, 235, 1)',
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          fill: true,
        }]
      },
      options: {
        responsive: true,
        scales: {
          x: {
            beginAtZero: true
          },
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Class Distribution Chart
    var ctxDoughnut = document.getElementById('classDistribution').getContext('2d');
    new Chart(ctxDoughnut, {
      type: 'doughnut',
      data: {
        labels: ['Courses', 'Donations', 'Teachers', 'Students'],
        datasets: [{
          data: [25, 20, 15, 40],
          backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0']
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top'
          }
        }
      }
    });
  });
</script>
<?= $this->endSection() ?>

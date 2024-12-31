<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="content-body">
  <div class="container">
    <div class="row">
      <!-- Profile image -->
      <div class="col-xl-4">
        <div class="row">
          <div class="col-xl-12 mb-3">
            <div class="card">
              <div class="card-body shadow-sm">
                <div class="text-center profile-statistics">
                  <!-- Profile Image -->
                  <div class="profile-photo mb-4">
                    <img class="img-fluid rounded-circle" src="<?= base_url('assets/img/usman.png') ?>" alt="" style="max-width: 120px; height: auto;">
                  </div>
                  <!-- Profile Details -->
                  <div class="profile-info">
                    <h4 class="text-primary mb-1">Muhammad Usman</h4>
                    <p class="text-muted mb-1">Web Designer</p>
                  </div>
                  <!-- Social Media Icons -->
                  <div class="social-media mb-4">
                    <a href="https://www.facebook.com" target="_blank" class="text-primary me-3">
                      <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="https://www.twitter.com" target="_blank" class="text-primary me-3">
                      <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="text-primary me-3">
                      <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" class="text-primary">
                      <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>
                  </div>
                  <!-- --user detail-- -->
                  <div class="profile-personal-info mt-4">
                    <h5 class="text-primary mb-4">Personal Information</h5>
                    <div class="row g-3">
                      <!-- Individual Info Blocks -->
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 shadow-sm">
                          <h6 class="text-muted mb-1">Name</h6>
                          <p class="mb-0">Mitchell C. Shay</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 shadow-sm">
                          <h6 class="text-muted mb-1">Email</h6>
                          <p class="mb-0">example@example.com</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 shadow-sm">
                          <h6 class="text-muted mb-1">Availability</h6>
                          <p class="mb-0">Full Time (Freelancer)</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 shadow-sm">
                          <h6 class="text-muted mb-1">Age</h6>
                          <p class="mb-0">27</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 shadow-sm">
                          <h6 class="text-muted mb-1">Location</h6>
                          <p class="mb-0">Islamabad</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 shadow-sm">
                          <h6 class="text-muted mb-1">Years of Experience</h6>
                          <p class="mb-0">7 Years</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- --languages-- -->
                <div class="profile-lang mt-3">
                  <h5 class="text-primary mb-2">Language</h5>
                  <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a>
                  <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                  <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- User Personal Data -->
      <div class="col-xl-8 position-relative">
        <div class="card h-auto">
          <h4 class="text-primary mt-4 fw-bold" style="padding-left: 20px;">Overview</h4>
          <div class="card-body">
            <!-- Edit Icon -->
            <a href="<?= base_url('user/edit-profile') ?>" class="position-absolute top-0 end-0 p-4 text-primary" title="Edit">
              <i class="fas fa-edit"></i>
            </a>
            <div class="profile-tab">
              <div class="custom-tab-1">
                <div class="profile-about-me">
                  <div class="pb-3">
                    <h5 class="text-primary">Description</h5>
                    <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                    <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                  </div>
                </div>
                <div class="profile-skills">
                  <h5 class="text-primary mb-2">Selected Cource</h5>
                  <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Admin</a>
                  <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                  <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                  <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                </div>
                <!-- Daily Class Schedule Section -->
                <div class="profile-schedule mt-4">
                  <div class="card border-light shadow-sm rounded-3">
                    <h5 class="text-primary">Daily Class Schedule</h5>
                    <div class="card-body p-3">
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm mb-0">
                          <thead class="table-light">
                            <tr>
                              <th>Time</th>
                              <th>Monday</th>
                              <th>Tuesday</th>
                              <th>Wednesday</th>
                              <th>Thursday</th>
                              <th>Friday</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>9:00 AM - 10:00 AM</td>
                              <td>Math</td>
                              <td>History</td>
                              <td>Geography</td>
                              <td>Biology</td>
                              <td>Physics</td>
                            </tr>
                            <tr>
                              <td>10:15 AM - 11:15 AM</td>
                              <td>English</td>
                              <td>Art</td>
                              <td>PE</td>
                              <td>Chemistry</td>
                              <td>Economics</td>
                            </tr>
                            <tr>
                              <td>11:30 AM - 12:30 PM</td>
                              <td>Science</td>
                              <td>Music</td>
                              <td>Computer Science</td>
                              <td>Literature</td>
                              <td>Philosophy</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>

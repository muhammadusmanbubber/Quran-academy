<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
  <div class="row">
    <div class="card h-auto">
      <div class="d-flex justify-content-between align-items-center">
        <h4 class="text-primary mt-4 fw-bold" style="padding-left: 20px;">Basic Information</h4>
        <!-- Edit Iconmdi mdi-menu -->
        <a href="<?= base_url('user/edit-profile') ?>" class="position-absolute top-0 end-0 p-4 text-primary" title="Edit">
          <div class="icon-circle">
            <i class="mdi mdi-pencil"></i>
          </div>
        </a>
      </div>
      <!--Start success and error session -->
      <?php if (session()->get('success')) : ?>
        <div class="alert alert-success">
          <p>
            <?php echo session()->get('success') ?>
          </p>
        </div>
      <?php endif; ?>
      <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger">
          <p>
            <?php echo session()->get('fail') ?>
          </p>
        </div>
      <?php endif; ?>
      <!--End success and error session -->
      <div class="card-body">
        <div class="row mt-4">
          <div class="col-lg-3 col-md-4 mb-3">
            <div class="profile_img">
              <!-- Display the profile image -->
              <img src="<?= esc($profileImage) ?>" alt="Profile Image" class="rounded-circle border border-secondary" style="width: 170px; height: 170px; object-fit: cover;">
            </div>
          </div>
          <div class="col-lg-9 col-md-8 mb-3">
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/user_orange.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Name</p>
                    <div class="d-flex">
                      <?php
                      if (!empty($registeredChildRecord['username'])) {
                        $username = $registeredChildRecord['username'];
                      } else {
                        $username = '--';
                      }
                      ?>
                      <h6 class="me-1"><?= $username ?></h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/user_orange.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Father Name</p>
                    <div class="d-flex">
                      <?php
                      if (!empty($registeredChildRecord['fathername'])) {
                        $fathername = $registeredChildRecord['fathername'];
                      } else {
                        $fathername = '--';
                      }
                      ?>
                      <h6 class="me-1"><?= $fathername ?></h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/email.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 mt-1 fw-bold">Email</p>
                    <?php
                    if (!empty($registeredChildRecord['email'])) {
                      $email = $registeredChildRecord['email'];
                    } else {
                      $email = '--';
                    }
                    ?>
                    <h6><?= $email ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/phone.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Phone Number</p>
                    <?php
                    if (!empty($registeredChildRecord['phone_number'])) {
                      $mobile = $registeredChildRecord['phone_number'];
                    } else {
                      $mobile = '--';
                    }
                    ?>
                    <h6><?= $mobile ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/calendar_orange.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 mt-1 fw-bold">Date Of Birth</p>
                    <?php
                    if (!empty($registeredChildRecord['birth'])) {
                      $date_of_birth = $registeredChildRecord['birth'];
                    } else {
                      $date_of_birth = '--';
                    }
                    ?>
                    <h6><?= $date_of_birth ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/gender.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Gender</p>
                    <?php
                    if (!empty($registeredChildRecord['gender'])) {
                      $gender = $registeredChildRecord['gender'];
                    } else {
                      $gender = '--';
                    }
                    ?>
                    <h6><?= ucfirst($gender) ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/place.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Country</p>
                    <?php
                    if (!empty($registeredChildRecord['country'])) {
                      $country = $registeredChildRecord['country'];
                    } else {
                      $country = '--';
                    }
                    ?>
                    <h6><?= $country ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/place.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Status</p>
                    <?php
                    if (!empty($userRecord['status'])) {
                      $userrecord = $userRecord['status'];
                    } else {
                      $userrecord = '--';
                    }
                    ?>
                    <h6><?= $userrecord ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url("assets/img/svg/adress_book.svg") ?>" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="text_orange text_medium mb-1 fw-bold">Address</p>
                    <?php
                    if (!empty($registeredChildRecord['address'])) {
                      $address = $registeredChildRecord['address'];
                    } else {
                      $address = "--";
                    }
                    ?>
                    <h6><?= $address ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="profile-tab">
            <div class="custom-tab-1">
              <div class="profile-about-me">
                <div class="pb-3">
                  <h5 class="text-primary">Description</h5>
                  <p>
                    Dedicated to learning and teaching the Quran with sincerity and passion.
                    Striving to deepen understanding and practice of Islamic teachings through our online platform.
                    Committed to fostering a supportive and respectful learning environment for all students.
                    Aiming to grow spiritually and contribute positively to the Quranic community.
                  </p>
                </div>
              </div>
              <div class="profile-skills">
                <h5 class="text-primary mb-2">Selected Course</h5>
                <?php if (!empty($courseTitle)): ?>
                  <a class="btn btn-primary light btn-xs mb-1"><?= esc($courseTitle) ?></a>
                <?php else: ?>
                  <a class="btn btn-primary light btn-xs mb-1">--</a>
                <?php endif; ?>
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
<!-- Modal for Receiving Calls -->
<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h3 class="modal-title text-primary fw-bold text-center" id="callModalLabel">Calling <span id="call-username"></span></h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center align-items-center">
        <div class="video-container d-flex justify-content-center align-items-center w-100">
          <video id="localVideo" autoplay playsinline class="video-element"></video>
          <video id="remoteVideo" autoplay playsinline class="video-element"></video>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.0/socket.io.js"></script> -->
<!-- <script>
  const userId = 'user_id'; // Replace this with the actual user ID from your server-side logic
  const socket = io('http://localhost:4000');

  // Register the user with the server
  socket.emit('registerUser', userId);

  // Listening for an incoming call
  socket.on('incomingCall', (data) => {
    const {
      callerName
    } = data;
    const acceptCall = confirm(`You have an incoming call from ${callerName}. Do you want to accept?`);

    if (acceptCall) {
      socket.emit('acceptCall', {
        callerId: data.callerId
      });
      startCall();
    } else {
      socket.emit('rejectCall', {
        callerId: data.callerId
      });
    }
  });

  function startCall() {
    // Video call logic goes here
    console.log('Starting the video call...');
  }
</script> -->
<?= $this->endSection() ?>
<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary mb-4">User Profile</h2>
        </div>
        <!-- user profile image card  -->
        <div class="col-xl-4">
            <div class="card border-0 rounded-5 shadow-lg">
                <div class="card-body text-center p-4">
                    <div class="position-relative mb-3">
                        <img src="https://picsum.photos/200" alt="Profile" class="rounded-circle border border-primary" style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                    <h2 class="mb-2"><?= ucwords(strtolower($user['username'])) ?></h2>
                    <!-- <h3 class="text-muted mb-4">Web Designer</h3> -->
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" class="text-primary mx-2 fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary mx-2 fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-primary mx-2 fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-primary mx-2 fs-4"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <!-- User Profile Section -->
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title mb-4 text-primary border-bottom pb-2">About</h5>
                            <p class="small fst-italic text-muted mb-4">
                                Welcome to your profile! Here, you can view and update your personal information, and manage your account settings. Feel free to explore your details, connect with others, and make any changes you need. We’re glad to have you here and hope you find everything you need to make the most of your experience.
                            </p>
                            <h5 class="card-title mb-4 text-primary border-bottom pb-2">Profile Details</h5>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 d-flex align-items-center">
                                    <i class="fas fa-user-circle text-light me-2"></i> <!-- Full Name icon -->
                                    <span class="text-secondary">Student Name</span>
                                </div>
                                <div class="col-lg-9 col-md-8"><?= ucwords(strtolower($user['username'])) ?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 d-flex align-items-center">
                                    <i class="fas fa-envelope text-light me-2"></i> <!-- Email icon -->
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-lg-9 col-md-8"><?= $user['email'] ?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 d-flex align-items-center">
                                    <i class="fas fa-phone-alt text-light me-2"></i> <!-- Phone Number icon -->
                                    <span class="text-secondary">Phone Number</span>
                                </div>
                                <div class="col-lg-9 col-md-8"><?= $user['phone_number'] ?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 d-flex align-items-center">
                                    <i class="fas fa-signal text-light me-2"></i> <!-- Status icon -->
                                    <span class="text-secondary">Status</span>
                                </div>
                                <div class="col-lg-9 col-md-8"><?= $user['status'] ?></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt text-light me-2"></i> <!-- Address icon -->
                                    <span class="text-secondary">Address</span>
                                </div>
                                <div class="col-lg-9 col-md-8">Rawalpindi Islamabad</div>
                            </div>

                        </div>
                        <!-- Profile Edit Form -->
                        <div class="tab-pane fade profile-edit" id="profile-edit">
                            <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/users/save-user-form') ?>" class="mx-auto" style="max-width: 600px;">
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label passenger_form_label color_primary mb-1">Full Name<span class="required_show">*</span></label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" value="<?= $user['username'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label passenger_form_label color_primary mb-1">Email<span class="required_show">*</span></label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="company" type="text" class="form-control" value="<?= $user['email'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label passenger_form_label color_primary mb-1">Phone Number<span class="required_show">*</span></label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="job" type="text" class="form-control" id="Job" value="<?= $user['phone_number'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label passenger_form_label color_primary mb-1">Address<span class="required_show">*</span></label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="address" type="text" class="form-control" id="Address" value="<?= $user['email'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Twitter and Facebook -->
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label passenger_form_label color_primary mb-1">Twitter Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label passenger_form_label color_primary mb-1">Facebook Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile Image -->
                                <div class="row mb-3">
                                    <label class="form-label passenger_form_label color_primary mb-1">
                                        Profile Image <span class="required_show">*</span>
                                    </label>
                                    <div action="upload" id="category-pic" class="dropzone dropzone_main needsclick dz-clickable">
                                        <div class="dz-message needsclick">
                                            <span class="text">
                                                <img src="<?= base_url('assets/img/svg/panel_svg/upload_icon.svg') ?>" alt="">
                                                <span class="text_light">Drag and drop Cover image, or <span class="text_orange">Browse</span></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
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
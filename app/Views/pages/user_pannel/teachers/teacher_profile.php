<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<style>
	.photo-content .cover-photo {
		background: url('<?php echo base_url('assets/img/banner.jpg'); ?>');
		background-position-x: 0%;
		background-position-y: 0%;
		background-size: auto;
		background-size: cover;
		background-position: center;
		min-height: 15.625rem;
		width: 100%;
		border-top-left-radius: 0.375rem;
		border-top-right-radius: 0.375rem;
	}
</style>
<div class="content-body">
	<div class="container">
		<div class="row">
			<!-- cover image -->
			<div class="profile card card-body shadow-sm">
				<div class="profile-head">
					<div class="photo-content p-2">
						<div class="cover-photo rounded"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
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
									<!-- statics condtions -->
									<div class="row mb-4 text-center">
										<div class="col-4">
											<div class="d-flex flex-column align-items-center">
												<div class="d-flex align-items-center mb-2">
													<i class="fas fa-user-friends fa-sm text-primary me-2"></i>
													<span class="text-muted">Followers</span>
												</div>
												<h4 class="m-b-0">150</h4>
											</div>
										</div>
										<div class="col-4">
											<div class="d-flex flex-column align-items-center">
												<div class="d-flex align-items-center mb-2">
													<i class="fas fa-map-marker-alt fa-sm text-success me-2"></i>
													<span class="text-muted">Places</span>
												</div>
												<h4 class="m-b-0">140</h4>
											</div>
										</div>
										<div class="col-4">
											<div class="d-flex flex-column align-items-center">
												<div class="d-flex align-items-center mb-2">
													<i class="fas fa-star fa-sm text-warning me-2"></i>
													<span class="text-muted">Reviews</span>
												</div>
												<h4 class="m-b-0">45</h4>
											</div>
										</div>
									</div>
									<!-- Buttons -->
									<div class="mt-4">
										<a href="<?= base_url('admin/cources/add-cource') ?>" class="btn btn-success btn-sm w-48"><i class="mdi mdi-email me-3"></i>Send Message</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- User Personal Data -->
			<div class="col-xl-8">
				<div class="card h-auto">
					<div class="card-body">
						<div class="profile-tab">
							<div class="custom-tab-1">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
									</li>
									<li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Setting</a>
									</li>
								</ul>
								<div class="tab-content">
									<!-- About User Profile -->
									<div id="about-me" class="tab-pane fade active show">
										<div class="profile-about-me">
											<div class="pt-4 border-bottom-1 pb-3">
												<h5 class="text-primary">About Me</h5>
												<p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
												<p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
											</div>
										</div>
										<div class="profile-skills mb-5">
											<h5 class="text-primary mb-2">Skills</h5>
											<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Admin</a>
											<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
											<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
											<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
											<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Responsive</a>
											<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Crypto</a>
										</div>
										<div class="profile-lang  mb-5">
											<h5 class="text-primary mb-2">Language</h5>
											<a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a>
											<a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
											<a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
										</div>
										<div class="profile-personal-info">
											<h5 class="text-primary mb-4">Personal Information</h5>
											<div class="row mb-2">
												<div class="col-sm-3 col-5">
													<h5 class="f-w-500">Name <span class="pull-end">:</span>
													</h5>
												</div>
												<div class="col-sm-9 col-7"><span>Mitchell C.Shay</span>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-sm-3 col-5">
													<h5 class="f-w-500">Email <span class="pull-end">:</span>
													</h5>
												</div>
												<div class="col-sm-9 col-7"><span>example@examplel.com</span>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-sm-3 col-5">
													<h5 class="f-w-500">Availability <span class="pull-end">:</span></h5>
												</div>
												<div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-sm-3 col-5">
													<h5 class="f-w-500">Age <span class="pull-end">:</span>
													</h5>
												</div>
												<div class="col-sm-9 col-7"><span>27</span>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-sm-3 col-5">
													<h5 class="f-w-500">Location <span class="pull-end">:</span></h5>
												</div>
												<div class="col-sm-9 col-7"><span>Rosemont Avenue Melbourne,
														Florida</span>
												</div>
											</div>
											<div class="row mb-2">
												<div class="col-sm-3 col-5">
													<h5 class="f-w-500">Year Experience <span class="pull-end">:</span></h5>
												</div>
												<div class="col-sm-9 col-7"><span>07 Year Experiences</span>
												</div>
											</div>
										</div>
									</div>
									<!-- Update user Profile -->
									<div id="profile-settings" class="tab-pane fade">
										<div class="pt-3">
											<div class="settings-form">
												<h5 class="text-primary">Account Setting</h5>
												<form>
													<div class="row">
														<div class="mb-3 col-md-6">
															<label class="form-label">Email</label>
															<input type="email" placeholder="Email" class="form-control">
														</div>
														<div class="mb-3 col-md-6">
															<label class="form-label">Password</label>
															<input type="password" placeholder="Password" class="form-control">
														</div>
													</div>
													<div class="mb-3">
														<label class="form-label">Address</label>
														<input type="text" placeholder="1234 Main St" class="form-control">
													</div>
													<div class="mb-3">
														<label class="form-label">Address 2</label>
														<input type="text" placeholder="Apartment, studio, or floor" class="form-control">
													</div>
													<div class="row">
														<div class="mb-3 col-md-6">
															<label class="form-label">City</label>
															<input type="text" class="form-control">
														</div>
														<div class="mb-3 col-md-4">
															<label class="form-label">State</label>
															<select class="form-control default-select wide" id="inputState">
																<option selected="">Choose...</option>
																<option>Option 1</option>
																<option>Option 2</option>
																<option>Option 3</option>
															</select>
														</div>
														<div class="mb-3 col-md-2">
															<label class="form-label">Zip</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="mb-3">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="gridCheck">
															<label class="form-check-label form-label" for="gridCheck"> Check me out</label>
														</div>
													</div>
													<button class="btn btn-primary" type="submit">Sign
														in</button>
												</form>
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
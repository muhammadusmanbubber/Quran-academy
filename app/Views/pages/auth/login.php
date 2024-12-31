<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Login Section ======= -->
<style>
    .back-arrow {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 24px;
        color: #333;
        text-decoration: none;
        z-index: 10;
    }

    .card-container {
        position: relative;
    }
</style>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow border rounded-lg">
                <!-- Back Arrow Icon -->
                <a href="<?= base_url('/') ?>" class="back-arrow" style="font-size: 16px;">
                    <i class="fas fa-arrow-left text-primary">Back</i>
                </a>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="<?= base_url('assets/img/logo.png') ?>" class="img-fluid mb-3" style="width: 120px;" alt="">
                        <h2 class="h4 fw-bold text-secondary">Login to Your Account</h2>
                        <p class="text-muted">See what is going on with your business</p>
                    </div>
                    <!-- ********Start form Validation ********* -->
                    <?php if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
                        $validation = session()->get('validation');
                        $fieldErrors = session()->get('errors');
                    } ?>
                    <!--Start success and error session -->
                    <?php if (session()->get('success')) : ?>
                        <div class="alert alert-success text-center mb-4">
                            <?php echo session()->get('success') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->get('fail')) : ?>
                        <div class="alert alert-danger text-center mb-4">
                            <?php echo session()->get('fail') ?>
                        </div>
                    <?php endif; ?>
                    <!--login Form -->
                    <form action='<?= base_url('login_user') ?>' method='post'>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" required class="form-control" name='email' value="<?= old('email') ?>">
                            <?php if (!empty($fieldErrors['email'])) : ?>
                                <div class="text-danger mt-1"><?= $fieldErrors['email']; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <input id="password-field" required type="password" class="form-control" name="password" value="<?= old('password') ?>">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <img src="<?= base_url('assets/img/svg/eye_off.svg') ?>" class="img-fluid" alt="">
                                </button>
                            </div>
                            <?php if (!empty($fieldErrors['password'])) : ?>
                                <div class="text-danger mt-1"><?= $fieldErrors['password']; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember_me" checked>
                                <label class="form-check-label" for="remember_me">Remember Me</label>
                            </div>
                            <a href="<?= base_url('/forget') ?>" class="text-primary">Forget Password?</a>
                        </div>
                        <div class="mb-4 text-center">
                            <button type="submit" class="btn btn-primary w-50">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="text-muted mb-0">Don't have an account yet?
                            <a href="<?= base_url('/signup') ?>" class="text-primary fw-bold">Create Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 text-center">
        <div class="col">
            <p class="text-muted mb-0">
                &copy; Online Quran Academy <span id="currentYear"></span>. All rights reserved.
                <span id="currentDateTime"></span>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
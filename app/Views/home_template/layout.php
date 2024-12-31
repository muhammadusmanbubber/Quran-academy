<!doctype html>
<html lang="en" dir="ltr">
<?= $this->include('home_template/head') ?>

<body>
    <?php
    $currentURL = current_url();
    $noNavbarRoutes = ['signup', 'login', 'forget', 'change_password', 'donation-form'];
    // Check if the current URL ends with any of the no-navbar routes
    $showNavbar = true;
    foreach ($noNavbarRoutes as $route) {
        if (str_ends_with($currentURL, $route)) {
            $showNavbar = false;
            break;
        }
    }
    // Show the navbar only if $showNavbar is true
    if ($showNavbar): ?>
        <?= $this->include('home_template/navbar') ?>
    <?php endif; ?>
    <!-- main content file -->
    <main>
        <?= $this->renderSection('main_content') ?>
    </main>
    <?php
    $currentURL = current_url();
    $noFooterRoutes = ['signup', 'login', 'forget', 'change_password', 'donation-form'];
    // Check if the current URL ends with any of the no-footer routes
    $showFooter = true;
    foreach ($noFooterRoutes as $route) {
        if (str_ends_with($currentURL, $route)) {
            $showFooter = false;
            break;
        }
    }
    // Show the footer only if $showFooter is true
    if ($showFooter): ?>
        <?= $this->include('home_template/footer') ?>
    <?php endif; ?>
    <?= $this->include('home_template/script') ?>
    <?= $this->renderSection('extraScript') ?>
</body>

</html>
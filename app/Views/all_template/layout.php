<!doctype html>
<html lang="en" dir="ltr">
<?= $this->include('all_template/head') ?>

<body class="panell">
    <main>
        <!-- Top Header -->
        <div class="container-fluid page-body-wrapper">
            <?= $this->include('all_template/navbar') ?>
            <!-- Sidebar based on role_id -->
            <?php
            $role_id = session()->get('role_id');
            if ($role_id) {
                if ($role_id == 1) {
                    echo $this->include('all_template/user_sidebar');
                } elseif ($role_id == 2) {
                    echo $this->include('all_template/teacher_sidebar');
                } elseif ($role_id == 3) {
                    echo $this->include('all_template/admin_sidebar');
                } else {
                    echo $this->include('all_template/home_sidebar');
                }
            }
            ?>
            <?= $this->renderSection('main_content') ?>
        </div>
    </main>
    <?= $this->include('all_template/script') ?>
</body>
<?= $this->renderSection('extraScript') ?>

</html>
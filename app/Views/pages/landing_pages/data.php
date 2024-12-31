<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Welcome Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container mt-5">
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="align-middle table-success">
                        <th class="border-bottom text-center text-primary" style="width:10px;">Sr.#</th>
                        <th class="border-bottom text-center text-primary" style="width:10px;">username</th>
                        <th class="border-bottom text-center text-primary" style="width:10px;">email</th>
                        <th class="border-bottom text-center text-primary" style="width:10px;">phone_number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($courses) && is_array($courses)): ?>
                        <?php foreach ($courses as $course): ?>
                            <tr>
                                <td class="text-center"><?= $course['sequence_number'] ?></td>
                                <td><?= esc($course['username']) ?></td>
                                <td><?= esc($course['email']) ?></td>
                                <td><?= esc($course['phone_number']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">No courses available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>

<?= $this->endSection() ?>
<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Donation Categories</h2>
            <a href="<?= base_url('admin/donation/add-category') ?>" class="btn btn-success mb-4">Add Category</a>
        </div>
        <div class="mt-4">
            <h5 class="fw-bold">Category List</h5>
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead class="align-middle table-success">
                        <tr>
                            <th>Sr#</th>
                            <th>Donation Title</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($donations) && is_array($donations)): ?>
                            <?php foreach ($donations as $data): ?>
                                <tr>
                                    <td><?= $data['sequence_number'] ?></td>
                                    <td><?= esc($data['title']) ?></td>
                                    <td><?= esc(substr($data['description'], 0, 100)) ?>...</td>
                                    <td>
                                        <img src="<?= base_url('assets/upload/donation/' . $data['images']) ?>" alt="image" style="height: 50px; width: 36px;">
                                    </td>
                                    <td><?= esc($data['status']) ?></td>
                                    <td> <a href="<?= base_url('admin/cources/edit-cource/' . $data['id']) ?>" class="btn btn-light btn-sm"><i class="mdi mdi-pencil"></i> Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center bg-white fw-bold p-3">No Donation Category Available.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div id="userspagination" class="mt-4 d-flex justify-content-center">
                    <?= $pager_links ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
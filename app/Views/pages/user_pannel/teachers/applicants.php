<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Applicants List</h2>
        </div>
        <div class="table-responsive hr_list_table">
            <?php
            if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
                $validation = session()->get('validation');
                $fieldErrors = session()->get('errors');
            }
            ?>
            <?php if (session()->get('errors')) : ?>
                <div class="alert alert-danger">
                    <p>
                        <?php echo session()->get('errors') ?>
                    </p>
                </div>
            <?php endif; ?>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success">
                    <p>
                        <?php echo session()->get('success') ?>
                    </p>
                </div>
            <?php endif; ?>
            <table class="table mb-0 table-bordered table-striped align-middle">
                <!-- ***** Table Head ***** -->
                <thead>
                    <tr class="align-middle table-success">
                        <th class="border-bottom text-center text-primary" style="width:10px;">Sr.#</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 90px;">Teacher Name</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 50px;">Education</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 90px;">Phone Number</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 90px;">Specialize</th>
                        <th class="border-bottom text-center text-primary" style="width:15px;">Action</th>
                    </tr>
                </thead>
                <!-- ***** Table Body ***** -->
                <tbody class="daily_vaccination">
                    <tr>
                        <td class="text-center">
                            sdca
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            ad
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn footer_socail_icon" data-tooltip="view">
                                    <img src="<?= base_url('assets/img/svg/eye_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a href="" class="btn footer_socail_icon" data-tooltip="Edit">
                                    <img src="<?= base_url('assets/img/svg/edit_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a class="btn footer_socail_icon delete_status" data-userid="" data-tooltip="Delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            sdca
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            ad
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn footer_socail_icon" data-tooltip="view">
                                    <img src="<?= base_url('assets/img/svg/eye_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a href="" class="btn footer_socail_icon" data-tooltip="Edit">
                                    <img src="<?= base_url('assets/img/svg/edit_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a class="btn footer_socail_icon delete_status" data-userid="" data-tooltip="Delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            sdca
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            ad
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn footer_socail_icon" data-tooltip="view">
                                    <img src="<?= base_url('assets/img/svg/eye_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a href="" class="btn footer_socail_icon" data-tooltip="Edit">
                                    <img src="<?= base_url('assets/img/svg/edit_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a class="btn footer_socail_icon delete_status" data-userid="" data-tooltip="Delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            sdca
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            sd
                        </td>
                        <td class="text-center">
                            ad
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn footer_socail_icon" data-tooltip="view">
                                    <img src="<?= base_url('assets/img/svg/eye_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a href="" class="btn footer_socail_icon" data-tooltip="Edit">
                                    <img src="<?= base_url('assets/img/svg/edit_icon.svg') ?>" class="svg-icon" style="width:25px" alt="">
                                </a>
                                <a class="btn footer_socail_icon delete_status" data-userid="" data-tooltip="Delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="userspagination">
                <p>pagination</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>
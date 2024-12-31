<?php if ($successMessage) : ?>
    <div class="alert alert-success product_next_item light_green_bg border-0 text_success fw-bold alert-dismissible fade show" role="alert" id="mtDiv">
        <?= $successMessage ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if ($deleteMessage) : ?>
    <div class="alert alert-danger product_next_item light_red_bg border-0 text_danger fw-bold alert-dismissible fade show" role="alert" id="mtDiv">
        <?= $deleteMessage ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if ($warningMessage) : ?>
    <div class="alert alert-danger product_next_item light_yellow_bg border-0 text_warning fw-bold alert-dismissible fade show" role="alert" id="mtDiv">
        <?= $warningMessage ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<script>
        setTimeout(function() {
            $('#mtDiv').fadeOut('slow');
        }, 3000);
</script>
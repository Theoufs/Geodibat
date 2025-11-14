<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <h1 class="text-center" style="margin-top:120px"><?=lang("locale.error-404")?></h1>
    <h3 class="text-center" style="margin-top:20px"><?=lang("locale.error-page-unable-to-find")?></h1>
    <p class="text-center"><?=lang("locale.error-page-not-exist")?>.</p>
<?= $this->endSection('content'); ?>

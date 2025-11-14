<?php if(session()->getFlashdata('msg_type') == "success"):?>
    <div class="alert alert-dismissible alert-success">
        <div class="text-center"> <?= session()->getFlashdata('msg') ?></div>
    </div>
<?php elseif(session()->getFlashdata('msg_type') == "info"):?>
    <div class="alert alert-dismissible alert-info">
        <div class="text-center"> <?= session()->getFlashdata('msg') ?> </div>
    </div>
<?php elseif(session()->getFlashdata('msg_type') == "warning"):?>
<div class="alert alert-dismissible alert-warning">
    <div class="text-center"> <?= session()->getFlashdata('msg') ?> </div>
</div>
<?php elseif(session()->getFlashdata('msg_type') == "error"):?>
    <div class="alert alert-dismissible alert-danger">
        <div class="text-center"> <?= session()->getFlashdata('msg') ?> </div>
    </div>
<?php endif;?>
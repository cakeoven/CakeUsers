<?php $this->layout = 'pages'; ?>
<?= $this->Html->pageHeader(__('Set new password'), 'h4'); ?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="well">
            <?= $this->Form->create('User', ['url' => [$id, $token], 'autocomplete' => 'off']); ?>
            <?= $this->Form->input('password', ['default' => '', 'placeholder' => false]); ?>
            <?= $this->Form->btnSubmit(__('Change')); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
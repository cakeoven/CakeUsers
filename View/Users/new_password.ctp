<?php $this->layout = 'pages'; ?>
<?php echo $this->Html->pageHeader(__('Set new password'), 'h4'); ?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="well">
            <?php echo $this->Form->create('User', array('url' => array($id, $token), 'autocomplete' => 'off')); ?>
            <?php echo $this->Form->input('password', array('default' => '', 'placeholder' => false)); ?>
            <?php echo $this->Form->btnSubmit(__('Change')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
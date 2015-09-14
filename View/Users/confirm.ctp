<?php $this->layout = 'pages'; ?>
<?= $this->Html->pageHeader(__('Confirmed'), 'h3'); ?>
<div class="row">
    <div class="col-sm-3">
        <div class="list-group">
            <?= $this->Html->link(__('Login'), array('admin' => false, 'action' => 'login'),
                array('class' => 'list-group-item')); ?>
            <?= $this->Html->link(__('Reset password'), array('admin' => false, 'action' => 'resetPassword'),
                array('class' => 'list-group-item')); ?>
            <?= $this->Html->link(__('Resend confirmation'),
                array('admin' => false, 'action' => 'confirmResend'), array('class' => 'list-group-item')); ?>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="well">
            <?= $this->Html->lead('Your account has been confirmed'); ?>
            <p><?= __("Follow the link below to login"); ?></p>
            <?= $this->Html->link(__('Login'), array('action' => 'login')); ?>
        </div>
    </div>
</div>
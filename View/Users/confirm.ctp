<?php $this->layout = 'login'; ?>
<?= $this->Html->pageHeader(__('Confirmed'), 'h3'); ?>
<div class="row">
    <div class="col-sm-4">
        <div class="list-group">
            <?= $this->Html->link(__('Login'), ['admin' => false, 'action' => 'login'],
                ['class' => 'list-group-item']); ?>
            <?= $this->Html->link(__('Reset password'), ['admin' => false, 'action' => 'resetPassword'],
                ['class' => 'list-group-item']); ?>
            <?= $this->Html->link(__('Resend confirmation'),
                ['admin' => false, 'action' => 'confirmResend'], ['class' => 'list-group-item']); ?>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="well">
            <?= $this->Html->lead(__('Your account has been confirmed')); ?>
            <p><?= __("Follow the link below to login"); ?></p>
            <?= $this->Html->link(__('Login'), ['action' => 'login']); ?>
        </div>
    </div>
</div>
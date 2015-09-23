<?php $this->layout = 'login'; ?>
<?= $this->Html->pageHeader(__('Login'), 'h3'); ?>
<div class="row">
    <div class="col-sm-4">
        <div class="list-group">
            <?= $this->Html->link(__('Register'), ['action' => 'register'],
                ['class' => 'list-group-item']); ?>
            <?= $this->Html->link(__('Reset password'), ['action' => 'resetPassword'],
                ['class' => 'list-group-item']); ?>
            <?= $this->Html->link(__('Resend confirmation'),
                ['admin' => false, 'action' => 'confirmResend'], ['class' => 'list-group-item']); ?>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="well well-lg">
            <?php
            echo $this->Form->create('User');
            echo $this->Form->input('username', ['placeholder' => false, 'icon' => 'user']);
            echo $this->Form->input('password', ['placeholder' => false, 'icon' => 'key']);
            ?>
            <?= $this->Form->btnSubmit(__('Login')); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
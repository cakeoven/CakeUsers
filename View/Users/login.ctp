<?php $this->layout = 'pages'; ?>
<?php echo $this->Html->pageHeader(__('Login'), 'h3'); ?>
<div class="row">
    <div class="col-sm-5 col-md-3">
        <div class="list-group">
            <?php echo $this->Html->link(__('Register'), array('action' => 'register'),
                array('class' => 'list-group-item')); ?>
            <?php echo $this->Html->link(__('Reset password'), array('action' => 'resetPassword'),
                array('class' => 'list-group-item')); ?>
            <?php echo $this->Html->link(__('Resend confirmation'),
                array('admin' => false, 'action' => 'confirmResend'), array('class' => 'list-group-item')); ?>
        </div>
    </div>
    <div class="col-sm-7 col-md-9">
        <div class="well well-lg">
            <?php
            echo $this->Form->create('User');
            echo $this->Form->input('username', array('placeholder' => false, 'icon' => 'user'));
            echo $this->Form->input('password', array('placeholder' => false, 'icon' => 'key'));
            ?>
            <?php echo $this->Form->btnSubmit(__('Login')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
<?php $this->layout = 'login'; ?>
<?php echo $this->Html->pageHeader(__('Resend Confirmation Email'), 'h3'); ?>
<div class="row">
    <div class="col-sm-4">
        <div class="list-group">
            <?php echo $this->Html->link(__('Login'), '/login', ['class' => 'list-group-item']); ?>
            <?php echo $this->Html->link(__('Register'), '/register', ['class' => 'list-group-item']); ?>
            <?php echo $this->Html->link(__('Reset password'), '/resetPassword', ['class' => 'list-group-item']); ?>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="well">
            <?php echo $this->Form->create('User'); ?>
            <?php echo $this->Form->input('email', ['placeholder' => false]); ?>
            <?php echo $this->Form->btnSubmit(__('Send')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

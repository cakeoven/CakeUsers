<?php $this->layout = 'pages';?>
<h3 class="page-header"><?php echo __('Reset Password');?></h3>
<div class="row">
	<div class="col-sm-5 col-md-4">
		<div class="list-group">
			<?php echo $this->Html->link(__('Login'), array('action' => 'login'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Register'), array('action' => 'register'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Resend confirmation'), array('admin' => false, 'action' => 'confirmResend'), array('class' => 'list-group-item'));?>
		</div>
	</div>
	<div class="col-sm-7 col-md-6">
		<div class="well">
			<?php echo $this->Form->create('User', array('autocomplete' => 'off'));?>
			<?php echo $this->Form->input('email', array('placeholder' => false));?>
			<?php echo $this->Form->btnSubmit(__('Send'));?>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

<?php $this->layout = 'pages'; ?>
<?php echo $this->Html->pageHeader(__('Resend Confirmation Email'),'h3');?>
<div class="row">
	<div class="col-sm-5 col-md-4">
		<div class="list-group">
			<?php echo $this->Html->link(__('Login'), array('admin' => false, 'action' => 'login'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Reset password'), array('admin' => false, 'action' => 'resetPassword'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Resend confirmation'), array('admin' => false, 'action' => 'confirmResend'), array('class' => 'list-group-item'));?>
		</div>
	</div>
	<div class="col-sm-7 col-md-6">	
		<div class="well">
			<?php echo $this->Form->create('User');?>
			<?php echo $this->Form->input('email', array('placeholder' => false));?>
			<?php echo $this->Form->btnSubmit(__('Send'));?>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

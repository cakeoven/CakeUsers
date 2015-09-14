<?php $this->layout = 'pages';?>
<?php echo $this->Html->pageHeader(__('Register'), 'h3')?>
<div class="row">
	<div class="col-sm-5 col-md-4">
		<div class="list-group">
			<?php echo $this->Html->link(__('Login'), array('admin' => false, 'action' => 'login'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Reset password'), array('admin' => false, 'action' => 'resetPassword'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Resend confirmation'), array('admin' => false, 'action' => 'confirmResend'), array('class' => 'list-group-item'));?>
		</div>
	</div>
	<div class="col-sm-7 col-md-8">
		<div class="well">
			<?php echo $this->Form->create('User',array('autocomplete' => 'off'));?>
			<?php
			echo $this->Form->input('username', array('placeholder' => false));
			echo $this->Form->input('email', array('placeholder' => false));
			echo $this->Form->input('password', array('placeholder' => false));
			echo $this->Form->input('firstname', array('placeholder' => false));
			echo $this->Form->input('lastname', array('placeholder' => false));
			?>
			<?php echo $this->Form->input('phone', array('placeholder' => false));?>
			<?php echo $this->Form->input('cellphone', array('placeholder' => false));?>
			<?php echo $this->Form->btnSubmit(__('Register'));?>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>
<?php $this->layout = 'pages';?>
<?php echo $this->Html->pageHeader(__('Confirmed'), 'h3');?>
<div class="row">
	<div class="col-sm-3">
		<div class="list-group">
			<?php echo $this->Html->link(__('Login'), array('admin' => false, 'action' => 'login'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Reset password'), array('admin' => false, 'action' => 'resetPassword'), array('class' => 'list-group-item'));?>
			<?php echo $this->Html->link(__('Resend confirmation'), array('admin' => false, 'action' => 'confirmResend'), array('class' => 'list-group-item'));?>
		</div>
	</div>
	<div class="col-sm-9">
		<div class="well">
			<?php echo $this->Html->lead('Your account has been confirmed'); ?>
			<p><?php echo __("Follow the link below to login"); ?></p>
			<?php echo $this->Html->link(__('Login'), array('action' => 'login'));?>
		</div>
	</div>
</div>
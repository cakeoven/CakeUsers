<?php $this->Html->addCrumb($this->Html->link(__('Users'), array('action' => 'index'), array('icon' => array('class' => 'icon icon-user icon-fw'))));?>
<?php echo $this->Form->create('User');?>
<div class="row">
	<div class="col-md-9">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><?php echo $this->Html->link(__('User'), '#user', array("data-toggle" => 'tab', 'role' => 'tab'));?></li>
			<li><?php echo $this->Html->link(__('Misc.'), '#misc', array("data-toggle" => 'tab', 'role' => 'tab'));?></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="user">
				<div class="row">
					<div class="col-sm-9">
						<?php
						echo $this->Form->input('username');
						echo $this->Form->input('password');
						echo $this->Form->chosen('group_id', array('empty' => false));
						echo $this->Form->input('firstname');
						echo $this->Form->input('lastname');
						echo $this->Form->input('email');
						?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="misc">
				<?php echo $this->Form->input('comments', array('placeholder' => false, 'rows' => '7'));?>
			</div>
		</div>
	</div>
	<div class="col-md-3 tabs-next">
		<?php echo $this->element('forms/buttons-bottom');?>
	</div>
</div>
<?php echo $this->Form->end();?>
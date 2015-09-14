<div class="table-responsive">
	<table class="table table-hover table-bordered table-striped small">
		<tr>
			<th><?php echo __('id');?></th>
			<th><?php echo __('Active');?></th>
			<th><?php echo __('Verified');?></th>
			<th><?php echo __('Username');?></th>
			<th><?php echo __('Group');?></th>
			<th><?php echo __('Firstname');?></th>
			<th><?php echo __('Lastname');?></th>
			<th><?php echo __('email');?></th>
			<th><?php echo __('Phones');?></th>
			<th><?php echo __('Created');?></th>
			<th><?php echo __('Updated');?></th>
			<th><?php echo __('Actions');?></th>
		</tr>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo h($user['User']['id']);?></td>
				<td><?php echo $this->Html->status($user['User']['active']);?></td>
				<td><?php echo $this->Html->status($user['User']['verified']);?></td>
				<td><?php echo h($user['User']['username']);?></td>
				<td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']));?></td>
				<td><?php echo h($user['User']['firstname']);?>&nbsp;</td>
				<td><?php echo h($user['User']['lastname']);?>&nbsp;</td>
				<td><?php echo $this->Text->autoLinkEmails($user['User']['email'])?></td>
				<td><?php echo h($user['User']['phones']);?></td>
				<td><time><?php echo h($user['User']['created']);?></time></td>
				<td><time><?php echo h($user['User']['updated']);?></time></td>
				<td>
					<div class="btn-group-nowrap">
						<?php echo $this->Element->btnLinkView($user['User']['id']);?>
						<?php echo $this->Element->btnLinkEdit($user['User']['id']);?>
						<?php echo $this->Element->btnLinkDelete($user['User']['id']);?>
					</div>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
</div>

<?php $this->Html->addCrumb($this->Html->link(__('Users'), array('action' => 'index'), array('icon' => array('class' => 'icon icon-users icon-fw'))));?>
<div class="toolbar toolbar-default">
	<?php echo $this->element('search');?>
	<?php echo $this->Html->link(__('Add'), array('action' => 'add'), array('class' => 'btn btn-success btn-sm', 'icon' => 'plus'));?>
	<div class="btn-group">
		<?php echo $this->Html->link(__('ACL'), '/acl/permissions', array('class' => 'btn btn-info btn-sm', 'icon' => 'filter'));?>
		<?php echo $this->Html->button('', array('class' => 'btn btn-info btn-sm dropdown-toggle', 'data-toggle' => 'dropdown', 'icon' => 'caret-down'));?>
		<ul class="dropdown-menu">
			<li><?php echo $this->Html->link(__('Update ACOs'), array('admin' => false, 'plugin' => 'acl_manager', 'controller' => 'acl', 'action' => 'update_acos'), array('icon' => 'refresh'));?></li>
			<li><?php echo $this->Html->link(__('Update AROs'), array('admin' => false, 'plugin' => 'acl_manager', 'controller' => 'acl', 'action' => 'update_aros'), array('icon' => 'refresh'));?></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link(__('Drop ACO/ARO'), array('admin' => false, 'plugin' => 'acl_manager', 'controller' => 'acl', 'action' => 'drop'), array('icon' => 'eraser'));?></li>
			<li><?php echo $this->Html->link(__('Drop Permisions'), array('admin' => false, 'plugin' => 'acl_manager', 'controller' => 'acl', 'action' => 'drop_perms'), array('icon' => 'eraser'));?></li>
		</ul>
	</div>
</div>
<div class="table-responsive">
	<table class="table table-hover table-bordered table-striped small">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('active');?></th>
				<th><?php echo $this->Paginator->sort('verified');?></th>
				<th><?php echo $this->Paginator->sort('username');?></th>
				<th><?php echo $this->Paginator->sort('Group.id', __('Group'));?></th>
				<th><?php echo $this->Paginator->sort('firstname');?></th>
				<th><?php echo $this->Paginator->sort('lastname');?></th>
				<th><?php echo $this->Paginator->sort('email');?></th>
				<th><?php echo $this->Paginator->sort('phone');?></th>
				<th><?php echo $this->Paginator->sort('cellphone');?></th>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th><?php echo $this->Paginator->sort('updated');?></th>
				<th><?php echo __('Actions');?></th>
			</tr>
		</thead>
		<tbody>
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
					<td><?php echo h($user['User']['phone']);?></td>
					<td><?php echo h($user['User']['cellphone']);?></td>
					<td><time><?php echo h($user['User']['created']);?></time></td>
					<td><time><?php echo h($user['User']['updated']);?></time></td>
					<td class="actions">
						<?php echo $this->Element->btnLinkView($user['User']['id']);?>
						<?php echo $this->Element->btnLinkEdit($user['User']['id']);?>
						<?php echo $this->Element->btnLinkDelete($user['User']['id']);?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>

</div>
<?php
echo $this->element('pagination/paging');
echo $this->element('pagination/pagination');

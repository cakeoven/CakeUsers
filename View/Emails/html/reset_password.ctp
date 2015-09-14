<?php

echo __('Hello %s,', $user['User']['username']);
echo "\n";
echo __('to change your password, you must visit the URL below');
echo "\n";
echo $this->Html->link(array(
	'admin' => false,
	'controller' => 'users',
	'action' => 'newPassword',
	$user['User']['id'],
	$user['User']['token_email'],
	'full_base' => true
		)
);

<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
echo __('Hello %s,', $user['User']['username']);
echo "<br>";
echo __('To validate your account, you must visit the URL below within 24 hours');
echo "<br>";
echo $this->Html->link([
    'admin' => false,
    'plugin' => false,
    'controller' => 'users',
    'action' => 'confirm',
    $user['User']['id'],
    $user['User']['token_email'],
    'full_base' => true,
]);

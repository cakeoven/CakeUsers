<?php

/**
 * Routes configuration
 *
 * @package        Plugins
 * @subpackage     Users.Config
 */
Router::connect('/login', array('plugin' => 'users', 'controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'users', 'controller' => 'users', 'action' => 'logout'));
Router::connect('/register', array('plugin' => 'users', 'controller' => 'users', 'action' => 'register'));

Router::connect('/admin/users/:controller/:action/*', array('plugin' => 'users', 'admin' => true, 'prefix' => 'admin'));

<?php

/**
 * Routes configuration
 *
 * @package        Plugins
 * @subpackage     Users.Config
 */

Router::connect('/login', ['plugin' => 'users', 'controller' => 'users', 'action' => 'login']);
Router::connect('/logout', ['plugin' => 'users', 'controller' => 'users', 'action' => 'logout']);
Router::connect('/register', ['plugin' => 'users', 'controller' => 'users', 'action' => 'register']);
Router::connect('/users/:action/*', [
    'plugin' => 'users',
    'controller' => 'users',
    'admin' => false,
    'prefix' => null,
]);
Router::connect('/admin/users/:action/*', [
    'plugin' => 'users',
    'controller' => 'users',
    'admin' => true,
    'prefix' => 'admin',
]);

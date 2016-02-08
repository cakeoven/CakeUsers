<?php
/**
 * Routes configuration
 *
 * @package Users
 */
Router::connect('/login', [
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'login',
]);
Router::connect('/logout', [
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'logout',
]);
Router::connect('/register', [
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'register',
]);
Router::connect('/confirmResend', [
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'confirmResend',
]);
Router::connect('/resetPassword', [
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'resetPassword',
]);
Router::connect('/changePassword', [
    'admin' => false,
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'changePassword',
]);
Router::connect('/newPassword/:id/:token', [
    'admin' => false,
    'plugin' => 'users',
    'controller' => 'users',
    'action' => 'newPassword',
], [
    'pass' => ['id', 'token'],
]);

Router::connect('/users/:action/*', [
    'plugin' => 'users',
    'controller' => 'users',
    'admin' => false,
    'prefix' => null,
]);;

Router::connect('/logins/:action/*', [
    'plugin' => 'users',
    'controller' => 'logins',
    'admin' => false,
    'prefix' => null,
]);

Router::connect('/groups/:action/*', [
    'plugin' => 'users',
    'controller' => 'groups',
    'admin' => false,
    'prefix' => null,
]);

Router::connect('/admin/users/:action/*', [
    'plugin' => 'users',
    'controller' => 'users',
    'admin' => true,
    'prefix' => 'admin',
]);

Router::connect('/admin/logins/:action/*', [
    'plugin' => 'users',
    'controller' => 'logins',
    'admin' => true,
    'prefix' => 'admin',
]);

Router::connect('/admin/groups/:action/*', [
    'plugin' => 'users',
    'controller' => 'groups',
    'admin' => true,
    'prefix' => 'admin',
]);
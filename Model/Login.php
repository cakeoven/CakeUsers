<?php

App::uses('UserAppModel', 'Users.Model');

/**
 * Login Model
 *
 * @property User $User
 * @package CakeUsers
 */
class Login extends UsersAppModel
{

    /**
     * Order field
     *
     * @var string
     */
    public $order = 'Login.modified DESC';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'id';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'user_id' => [
            'numeric' => [
                'rule' => ['numeric'],
            ],
        ],
        'browser' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
            ],
        ],
        'IP' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
            ],
        ],
    ];

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}

<?php

App::uses('UserAppModel', 'Users.Model');

/**
 * Login Model
 *
 * @property User $User
 * @package    Plugins
 * @subpackage Users.Models
 */
class Login extends UsersAppModel
{

    /**
     * Order field
     *
     * @var type
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
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
            ],
        ],
        'browser' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
            ],
        ],
        'IP' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
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

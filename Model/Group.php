<?php

App::uses('UsersAppModel', 'Users.Model');

/**
 * Group Model
 *
 * @package Users
 * @property Group $Group
 * @method findById($id)
 */
class Group extends UsersAppModel
{

    /**
     * Act as variable
     *
     * @var array
     */
    public $actsAs = [
        'Acl' => ['type' => 'requester'],
    ];

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    /**
     * VirtualFields field
     *
     * @var array
     */
    public $virtualFields = [
        'time_created' => "DATE_FORMAT(Group.created, '%H:%i')",
        'time_updated' => "DATE_FORMAT(Group.updated, '%H:%i')",
        'date_created' => "DATE_FORMAT(Group.created, '%Y-%m-%d')",
        'date_updated' => "DATE_FORMAT(Group.updated, '%Y-%m-%d')",
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'name' => [
            'notempty' => [
                'rule' => ['notempty'],
            ],
            'unique' => [
                'rule' => ['isUnique'],
                'message' => 'This group must be unique.',
            ],
        ],
        'created' => [
            'datetime' => [
                'rule' => ['datetime'],
            ],
        ],
        'updated' => [
            'datetime' => [
                'rule' => ['datetime'],
            ],
        ],
    ];

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'User' => [
            'className' => 'Users.User',
            'foreignKey' => 'group_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];

    /**
     * @return null
     */
    public function parentNode()
    {
        return null;
    }
}

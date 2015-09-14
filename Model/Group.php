<?php

App::uses('UsersAppModel', 'Users.Model');

/**
 * Group Model
 *
 * @property Group  $Group
 * @package    Plugins
 * @subpackage Users.Models
 */
class Group extends UsersAppModel
{

    /**
     * Act as variable
     *
     * @var array
     */
    public $actsAs = array(
        'Acl' => array('type' => 'requester')
    );

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
    public $virtualFields = array(
        'time_created' => "DATE_FORMAT(Group.created, '%H:%i')",
        'time_updated' => "DATE_FORMAT(Group.updated, '%H:%i')",
        'date_created' => "DATE_FORMAT(Group.created, '%Y-%m-%d')",
        'date_updated' => "DATE_FORMAT(Group.updated, '%Y-%m-%d')",
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
            'unique' => array(
                'rule' => array('isUnique'),
                'message' => 'This group must be unique.'
            )
        ),
        'created' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            ),
        ),
        'updated' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            )
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'User' => array(
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
            'counterQuery' => ''
        )
    );

    /**
     * @return null
     */
    public function parentNode()
    {
        return null;
    }

}

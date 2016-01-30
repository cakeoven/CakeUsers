<?php
/**
 * LoginFixture
 *
 */
class LoginFixture extends CakeTestFixture
{

/**
 * Fields
 *
 * @var array
 */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
        'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
        'browser' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'IP' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => array('id', 'user_id'), 'unique' => 1),
            'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
            'fk_log_logins_users1_idx' => array('column' => 'user_id', 'unique' => 0)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );

/**
 * Records
 *
 * @var array
 */
    public $records = array(
        array(
            'id' => 1,
            'user_id' => 1,
            'browser' => 'Lorem ipsum dolor sit amet',
            'IP' => 'Lorem ipsum do',
            'modified' => '2014-02-15 01:19:40'
        ),
    );
}

<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture
{

/**
 * Fields
 *
 * @var array
 */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
        'active' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'verified' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
        'token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'token_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'token_email_expires' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'dropbox_token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'dropbox_token_secret' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'firstname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'lastname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'cellphone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'bank_account_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
        'calendar_background_color' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'calendar_font_color' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'comments' => array('type' => 'binary', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => array('id', 'group_id'), 'unique' => 1),
            'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
            'username_UNIQUE' => array('column' => 'username', 'unique' => 1),
            'fk_users_groups1_idx' => array('column' => 'group_id', 'unique' => 0)
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
            'id' => '1',
            'active' => 1,
            'verified' => 1,
            'username' => 'bonito',
            'password' => '1a0ed475b7b049e0356a7ee403d83a7a49abdd7f',
            'group_id' => '1',
            'token' => null,
            'token_email' => null,
            'token_email_expires' => null,
            'dropbox_token' => null,
            'dropbox_token_secret' => null,
            'firstname' => 'Γιώργος',
            'lastname' => 'Μπόνος',
            'email' => 'gmponos@gmail.com',
            'phone' => '2112132683',
            'cellphone' => '6983884605',
            'bank_account_id' => '1',
            'calendar_background_color' => '#990000',
            'calendar_font_color' => '',
            'comments' => '',
            'created' => '2013-10-17 18:19:00',
            'updated' => '2014-10-17 10:41:35'
        ),
        array(
            'id' => '2',
            'active' => 1,
            'verified' => 1,
            'username' => 'zinelis',
            'password' => '9e52df447ebef3f25da32b98d59d90e7519078e3',
            'group_id' => '3',
            'token' => null,
            'token_email' => null,
            'token_email_expires' => null,
            'dropbox_token' => null,
            'dropbox_token_secret' => null,
            'firstname' => 'Ορέστης',
            'lastname' => 'Ζηνέλης',
            'email' => 'zinelis@gmail.com',
            'phone' => '',
            'cellphone' => '',
            'bank_account_id' => null,
            'calendar_background_color' => '',
            'calendar_font_color' => '',
            'comments' => '',
            'created' => '2013-10-13 21:16:00',
            'updated' => '2015-02-06 10:56:38'
        ),
    );
}

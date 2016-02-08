<?php

/**
 * GroupFixture

 */
class GroupFixture extends CakeTestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = [
        'id' => [
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'length' => 10,
            'unsigned' => true,
            'key' => 'primary',
        ],
        'name' => [
            'type' => 'string',
            'null' => false,
            'default' => null,
            'length' => 45,
            'collate' => 'utf8_general_ci',
            'charset' => 'utf8',
        ],
        'active' => ['type' => 'boolean', 'null' => true, 'default' => null],
        'comments' => ['type' => 'binary', 'null' => true, 'default' => null],
        'created' => ['type' => 'datetime', 'null' => true, 'default' => null],
        'updated' => ['type' => 'datetime', 'null' => true, 'default' => null],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
            'id_UNIQUE' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'],
    ];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'admin',
            'active' => 0,
            'comments' => '',
            'created' => '2013-10-13 21:12:42',
            'updated' => '2013-10-13 21:12:42',
        ],
        [
            'id' => '2',
            'name' => 'manager',
            'active' => 0,
            'comments' => '',
            'created' => '2013-09-26 13:04:38',
            'updated' => '2013-09-26 13:04:38',
        ],
        [
            'id' => '3',
            'name' => 'user',
            'active' => 0,
            'comments' => '',
            'created' => '2013-09-26 13:05:44',
            'updated' => '2013-10-13 21:17:03',
        ],
    ];
}

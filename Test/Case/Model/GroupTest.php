<?php
App::uses('Group', 'Model');

/**
 * Group Test Case
 *
 */
class GroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group',
		'app.user',
		'app.task',
		'app.contact',
		'app.contact_type',
		'app.city',
		'app.state',
		'app.business',
		'app.business_type',
		'app.doy',
		'app.contract',
		'app.contract_type',
		'app.businesses_contact',
		'app.department',
		'app.task_status',
		'app.task_priority',
		'app.task_type',
		'app.login'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Group = ClassRegistry::init('Group');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Group);

		parent::tearDown();
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}

}

<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
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
		'app.business_contact',
		'app.task_status',
		'app.task_priority',
		'app.task_type'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function test_index() {
            $this->testAction('users/index');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testPersonal method
 *
 * @return void
 */
	public function testPersonal() {
	}

/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {
	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {
	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {
	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {
	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {
	}

/**
 * testLogin method
 *
 * @return void
 */
	public function testLogin() {
	}

/**
 * testLogout method
 *
 * @return void
 */
	public function testLogout() {
	}

/**
 * testRegister method
 *
 * @return void
 */
	public function testRegister() {
	}

/**
 * testChangePassword method
 *
 * @return void
 */
	public function test_change_password() {
            $Users = $this->generate('Users', array(
                'components' => array(
                    'Session',
                    'Auth' => array('user')
                )
            ));
            
            $Users->Auth->staticExpects($this->any())
                ->method('user')
                ->will($this->returnValue(1));
            $this->testAction('users/change_password');

	}

}

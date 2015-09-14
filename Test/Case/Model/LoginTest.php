<?php
App::uses('Login', 'Model');

/**
 * Login Test Case

 */
class LoginTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.login',
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
        'app.businesses_contact',
        'app.department',
        'app.task_status',
        'app.task_priority',
        'app.task_type'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Login = ClassRegistry::init('Login');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Login);

        parent::tearDown();
    }

}

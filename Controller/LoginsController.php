<?php

App::uses('UsersAppController', 'Users.Controller');

/**
 * Logins Controller
 *
 * @property	Login $Login
 * @package		Plugins
 * @subpackage	Users.Controllers
 */
class LoginsController extends UsersAppController {

/**
 * Show the related data
 *
 */
	public function related() {
		$query = $this->request->params['named'];
		$this->set('logins', $this->Login->find('all', array('conditions' => $query)));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Login->recursive = 0;
		$this->set('logins', $this->Paginator->paginate());
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->request->onlyAllow('post', 'delete');
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		if (!$this->Login->delete($id)) {
			throw new NotFoundException(__('Task was not deleted'));
		}
		if ($this->request->is('ajax')) {
			return $this->redirect($this->referer());
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin delete all the logins method
 *
 * @return type
 * @throws NotFoundException
 */
	public function admin_deleteAll() {
		$this->request->onlyAllow('post', 'delete');
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		if (!$this->Login->delete($id)) {
			throw new NotFoundException(__('Task was not deleted'));
		}
		if ($this->request->is('ajax')) {
			return $this->redirect($this->referer());
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin related method
 *
 */
	public function admin_related() {
		$query = $this->request->params['named'];
		$this->set('logins', $this->Login->find('all', array('conditions' => $query)));
	}

}

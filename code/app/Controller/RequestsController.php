<?php
App::uses('AppController', 'Controller');
/**
 * Requests Controller
 *
 * @property Request $Request
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RequestsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Request->recursive = 0;
		$this->set('requests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Request->exists($id)) {
			throw new NotFoundException(__('Invalid request'));
		}
		$options = array('conditions' => array('Request.' . $this->Request->primaryKey => $id));
		$this->set('request', $this->Request->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Request->create();
			if ($this->Request->save($this->request->data)) {
				$this->Flash->success(__('The request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The request could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Request->Client->find('list');
		$products = $this->Request->Product->find('list');
		$this->set(compact('clients', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Request->exists($id)) {
			throw new NotFoundException(__('Invalid request'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Request->save($this->request->data)) {
				$this->Flash->success(__('The request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Request.' . $this->Request->primaryKey => $id));
			$this->request->data = $this->Request->find('first', $options);
		}
		$clients = $this->Request->Client->find('list');
		$products = $this->Request->Product->find('list');
		$this->set(compact('clients', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Request->id = $id;
		if (!$this->Request->exists()) {
			throw new NotFoundException(__('Invalid request'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Request->delete()) {
			$this->Flash->success(__('The request has been deleted.'));
		} else {
			$this->Flash->error(__('The request could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');

class ProductsController extends AppController{

	public $components = array('Paginator');

	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Product->create();

			// debug($this->Product);
			// debug($this->request->data) or die;

			if($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('Product has been add.'));
				return $this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash(__('Error, product not add!'));

		}
	}

	public function edit($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('Product has been modified.'));
				return $this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash(__('Error, product not modified.'));
		}

		$this->request->data = $this->Product->findById($id);
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {

		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}

		$this->request->allowMethod('post', 'delete');

		if($this->Product->delete($id)) {
			$this->Session->setFlash(__('The product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product cloud not be deleted. Please, try again.'));
		}

		return $this->redirect(array('action' => 'index'));

	}

}

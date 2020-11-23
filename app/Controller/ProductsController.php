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
				$this->Session->setFlash('Product has been saved!');
				return $this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash('Error product not saved!');

		}
	}

	public function edit($id = null) {
		if ($this->request->is(array('post', 'put'))) {
			if($this->Product->save($this->request->data)) {
				$this->Session->setFlash('Product has been modified!');
				return $this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash('Error product not modified!');
		}

		$this->request->data = $this->Product->findById($id);
	}

	public function delete() {

	}

}

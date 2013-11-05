<?php
class DesviosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('desvios', $this->Desvios->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Desvio no encontrado'));
		}
		$desvio = $this->Desvio->findById($id);
		if (!$desvio) {
			throw new NotFoundException(__('Desvio no encontrado'));
		}
			$this->set('desvio', $desvio);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Desvio->create();
			if ($this->Desvio->save($this->request->data)) {
				$this->Session->setFlash('El Desvio se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Desvio no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Desvio no encontrado'));
		}
	
		$desvio = $this->Desvio->findById($id);
		if (!$desvio) {
			throw new NotFoundException(__('Desvio no encontrado'));
		}
	
		if ($this->request->is('desvio') || $this->request->is('put')) {
			$this->Desvio->id = $id;
			if ($this->Desvio->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $desvio;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Desvio->delete($id)) {
			$this->Session->setFlash('El Desvio con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
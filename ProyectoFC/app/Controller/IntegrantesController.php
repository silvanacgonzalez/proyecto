<?php
class IntegrantesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('integrantes', $this->Integrante->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$integrante = $this->Integrante->findById($id);
		if (!$integrante) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('integrante', $integrante);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Integrante->create();
			if ($this->Integrante->save($this->request->data)) {
				$this->Session->setFlash('Los datos se grabaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no se pudieron grabar');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		$integrante = $this->Integrante->findById($id);
		if (!$integrante) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('integrante') || $this->request->is('put')) {
			$this->Integrante->id = $id;
			if ($this->Integrante->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $integrante;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Integrante->delete($id)) {
			$this->Session->setFlash('El Integrante con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
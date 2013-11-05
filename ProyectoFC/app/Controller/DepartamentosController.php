<?php
class DepartamentosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('departamentos', $this->Departamento->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Departamento no encontrado'));
		}
		$departamento = $this->Departamento->findById($id);
		if (!$departamento) {
			throw new NotFoundException(__('Departamento no encontrado'));
		}
			$this->set('departamento', $departamento);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->request->data)) {
				$this->Session->setFlash('El Departamento se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Departamento no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Departamento no encontrado'));
		}
	
		$departamento = $this->Departamento->findById($id);
		if (!$departamento) {
			throw new NotFoundException(__('Departamento no encontrado'));
		}
	
		if ($this->request->is('departamento') || $this->request->is('put')) {
			$this->Departamento->id = $id;
			if ($this->Departamento->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $departamento;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Departamento->delete($id)) {
			$this->Session->setFlash('El Departamento con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
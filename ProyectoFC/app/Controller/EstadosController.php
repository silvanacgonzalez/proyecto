<?php
class EstadosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('estados', $this->Estado->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$estado = $this->Estado->findById($id);
		if (!$estado) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('estado', $estado);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Estado->create();
			if ($this->Estado->save($this->request->data)) {
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
	
		$estado = $this->Estado->findById($id);
		if (!$estado) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('estado') || $this->request->is('put')) {
			$this->Estado->id = $id;
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $estado;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Estado->delete($id)) {
			$this->Session->setFlash('El Estado con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
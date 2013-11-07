<?php
class RolsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('rols', $this->Rol->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Rol no encontrado'));
		}
		$rol = $this->Rol->findById($id);
		if (!$rol) {
			throw new NotFoundException(__('rol no encontrado'));
		}
			$this->set('rol', $rol);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Rol->create();
			if ($this->Rol->save($this->request->data)) {
				$this->Session->setFlash('El Rol se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Rol no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Rol no encontrado'));
		}
	
		$rol = $this->Rol->findById($id);
		if (!$rol) {
			throw new NotFoundException(__('Rol no encontrado'));
		}
	
		if ($this->request->is('rol') || $this->request->is('put')) {
			$this->Rol->id = $id;
			if ($this->Rol->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $rol;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Rol->delete($id)) {
			$this->Session->setFlash('El Rol con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

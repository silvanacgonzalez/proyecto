<?php
class EquiposController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('equipos', $this->Equipo->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$equipo = $this->Equipo->findById($id);
		if (!$equipo) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('equipo', $equipo);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->request->data)) {
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
	
		$equipo = $this->Equipo->findById($id);
		if (!$equipo) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is(equipo) || $this->request->is('put')) {
			$this->Equipo->id = $id;
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $equipo;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Equipo->delete($id)) {
			$this->Session->setFlash('El equipo con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
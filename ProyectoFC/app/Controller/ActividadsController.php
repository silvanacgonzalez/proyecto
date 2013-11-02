<?php
class ActividadsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('actividads', $this->Actividad->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Actividad no encontrada'));
		}
		$actividad = $this->Actividad->findById($id);
		if (!$actividad) {
			throw new NotFoundException(__('Actividad no encontrada'));
		}
			$this->set('actividad', $actividad);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Actividad->create();
			if ($this->Actividad->save($this->request->data)) {
				$this->Session->setFlash('La Actividad se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Actividad no pudo ser grabada');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Actividad no encontrada'));
		}
	
		$actividad = $this->Actividad->findById($id);
		if (!$actividad) {
			throw new NotFoundException(__('Actividad no encontrada'));
		}
	
		if ($this->request->is('actividad') || $this->request->is('put')) {
			$this->Actividad->id = $id;
			if ($this->Actividad->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $actividad;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Actividad->delete($id)) {
			$this->Session->setFlash('La Actividad con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
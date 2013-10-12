<?php
class EstadoNotificacionsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('estadonotificacions', $this->EstadoNotificacion->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Estado no encontrado'));
		}
		$estadonotificacion = $this->EstadoNotificacion->findById($id);
		if (!$estadonotificacion) {
			throw new NotFoundException(__('Estado no encontrado'));
		}
			$this->set('estadonotificacion', $estadonotificacion);
	}
	
	public function add() {
		if ($this->request->is('estadonotificacion')) {
			$this->EstadoNotificacion->create();
			if ($this->EstadoNotificacion->save($this->request->data)) {
				$this->Session->setFlash('El Estado se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Estado no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Estado no encontrado'));
		}
	
		$estadonotificacion = $this->EstadoNotificacion->findById($id);
		if (!$estadonotificacion) {
			throw new NotFoundException(__('Estado no encontrado'));
		}
	
		if ($this->request->is('estadonotificacion') || $this->request->is('put')) {
			$this->EstadoNotificacion->id = $id;
			if ($this->EstadoNotificacion->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $estadonotificacion;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->EstadoNotificacion->delete($id)) {
			$this->Session->setFlash('El Estado con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
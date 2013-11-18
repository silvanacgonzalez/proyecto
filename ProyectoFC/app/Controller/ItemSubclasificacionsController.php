<?php
class ItemSubclasificacionsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('itemsubclasificacions', $this->ItemSubclasificacion->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$itemsubclasificacion = $this->ItemSubclasificacion->findById($id);
		if (!$itemsubclasificacion) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('itemsubclasificacion', $itemsubclasificacion);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemSubclasificacion->create();
			if ($this->ItemSubclasificacion->save($this->request->data)) {
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
	
		$itemsubclasificacion = $this->ItemSubclasificacion->findById($id);
		if (!$itemsubclasificacion) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('itemsubclasificacion') || $this->request->is('put')) {
			$this->ItemSubclasificacion->id = $id;
			if ($this->ItemSubclasificacion->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $itemsubclasificacion;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ItemSubclasificacion->delete($id)) {
			$this->Session->setFlash('El Item de subclasificacion con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
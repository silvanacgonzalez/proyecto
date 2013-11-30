<?php
class EntidadFirmantesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('entidadfirmantes', $this->EntidadFirmante->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$entidadfirmante = $this->EntidadFirmante->findById($id);
		if (!$entidadfirmante) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('entidadfirmante', $entidadfirmante);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->EntidadFirmante->create();
			if ($this->EntidadFirmante->save($this->request->data)) {
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
	
		$entidadfirmante = $this->EntidadFirmante->findById($id);
		if (!$entidadfirmante) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('entidadfirmante') || $this->request->is('put')) {
			$this->EntidadFirmante->id = $id;
			if ($this->EntidadFirmante->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $entidadfirmante;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->EntidadFirmante->delete($id)) {
			$this->Session->setFlash('La entidad firmante con ID: ' . $id . ' fue borrada');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
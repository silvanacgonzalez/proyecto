<?php
class RecursoMaterialsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('recursomaterials', $this->RecursoMaterial->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Recurso Material no encontrado'));
		}
		$recursomaterial = $this->RecursoMaterial->findById($id);
		if (!$recursomaterial) {
			throw new NotFoundException(__('Recurso Material no encontrado'));
		}
			$this->set('recursomaterial', $recursomaterial);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->RecursoMaterial->create();
			if ($this->RecursoMaterial->save($this->request->data)) {
				$this->Session->setFlash('El Recurso Material se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Recurso Material no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Recurso Material no encontrado'));
		}
	
		$recursomaterial = $this->RecursoMaterial->findById($id);
		if (!$recursomaterial) {
			throw new NotFoundException(__('Recurso Material no encontrado'));
		}
	
		if ($this->request->is('recursomaterial') || $this->request->is('put')) {
			$this->RecursoMaterial->id = $id;
			if ($this->RecursoMaterial->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $recursomaterial;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->RecursoMaterial->delete($id)) {
			$this->Session->setFlash('El recurso material con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

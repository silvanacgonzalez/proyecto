<?php
class ClasificacionsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('clasificacions', $this->Clasificacion->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Clasificacion Invalida'));
		}
		$clasificacion = $this->Clasificacion->findById($id);
		if (!$clasificacion) {
			throw new NotFoundException(__('Clasificacion Invalida'));
		}
			$this->set('clasificacion', $clasificacion);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Clasificacion->create();
			if ($this->Clasificacion->save($this->request->data)) {
				$this->Session->setFlash('Tus datos han sido guardados.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Tus datos no han sido guardados.');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Clasificacion Invalida'));
		}
	
		$clasificacion = $this->Clasificacion->findById($id);
		if (!$clasificacion) {
			throw new NotFoundException(__('Clasificacion Invalida'));
		}
	
		if ($this->request->is('clasificacion') || $this->request->is('put')) {
			$this->Clasificacion->id = $id;
			if ($this->Clasificacion->save($this->request->data)) {
				$this->Session->setFlash('Tus datos han sido guardados.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Tus datos no han sido guardados.');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $clasificacion;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Clasificacion->delete($id)) {
			$this->Session->setFlash('La clasificacion: ' . $id . ' ha sido eliminada.');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
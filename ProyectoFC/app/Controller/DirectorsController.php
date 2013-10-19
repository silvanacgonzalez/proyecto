<?php
class DirectorsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('directors', $this->Director->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Director no encontrado'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Director no encontrado'));
		}
			$this->set('director', $director);
	}
	
	public function add() {
		if ($this->request->is('director')) {
			$this->Director->create();
			if ($this->Director->save($this->request->data)) {
				$this->Session->setFlash('El Director se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Director no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Director no encontrado'));
		}
	
		$post = $this->Director->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Director no encontrado'));
		}
	
		if ($this->request->is('director') || $this->request->is('put')) {
			$this->Director->id = $id;
			if ($this->Director->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $director;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Director->delete($id)) {
			$this->Session->setFlash('El Director con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
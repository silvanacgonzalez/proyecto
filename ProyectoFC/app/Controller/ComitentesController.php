<?php
class ComitentesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('comitentes', $this->Comitente->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
		$comitente = $this->Comitente->findById($id);
		if (!$comitente) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
			$this->set('comitente', $comitente);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Comitente->create();
			if ($this->Comitente->save($this->request->data)) {
				$this->Session->setFlash('El Comitente se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Comitente no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
	
		$comitente = $this->Comitente->findById($id);
		if (!$comitente) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
	
		if ($this->request->is('comitente') || $this->request->is('put')) {
			$this->Comitente->id = $id;
			if ($this->Comitente->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $comitente;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Comitente->delete($id)) {
			$this->Session->setFlash('El Comitente con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
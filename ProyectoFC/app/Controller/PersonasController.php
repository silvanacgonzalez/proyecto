<?php
class PersonasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('personas', $this->Persona->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
		$persona = $this->Persona->findById($id);
		if (!$persona) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
			$this->set('persona', $persona);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('La Persona se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Persona no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
	
		$persona = $this->Persona->findById($id);
		if (!$persona) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
	
		if ($this->request->is('persona') || $this->request->is('put')) {
			$this->Persona->id = $id;
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $persona;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Persona->delete($id)) {
			$this->Session->setFlash('La Persona con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
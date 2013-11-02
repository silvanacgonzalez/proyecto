<?php
class CategoriaPersonasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('categoriapersonas', $this->CategoriaPersona->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Categoria Persona no encontrado'));
		}
		$categoriapersona = $this->CategoriaPersona->findById($id);
		if (!$categoriapersona) {
			throw new NotFoundException(__('Categoria Persona no encontrado'));
		}
			$this->set('categoriapersona', $categoriapersona);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaPersona->create();
			if ($this->CategoriaPersona->save($this->request->data)) {
				$this->Session->setFlash('La categoria Persona se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La categoria Persona no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Categoria Persona no encontrado'));
		}
	
		$categoriapersona = $this->CategoriaPersona->findById($id);
		if (!$categoriapersona) {
			throw new NotFoundException(__('categoria persona no encontrado'));
		}
	
		if ($this->request->is('categoriapersona') || $this->request->is('put')) {
			$this->CategoriaPersona->id = $id;
			if ($this->CategoriaPersona->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $categoriapersona;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->CategoriaPersona->delete($id)) {
			$this->Session->setFlash('La categoria Persona con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
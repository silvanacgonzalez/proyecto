<?php
class CategoriasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('categorias', $this->Categoria->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Categoria no encontrado'));
		}
		$categoria = $this->Categoria->findById($id);
		if (!$categoria) {
			throw new NotFoundException(__('Categoria no encontrado'));
		}
			$this->set('categoria', $categoria);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash('La categoria se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La categoria no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Categoria no encontrado'));
		}
	
		$categoria = $this->Categoria->findById($id);
		if (!$categoria) {
			throw new NotFoundException(__('categoria no encontrado'));
		}
	
		if ($this->request->is('categoria') || $this->request->is('put')) {
			$this->Categoria->id = $id;
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $categoria;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Categoria->delete($id)) {
			$this->Session->setFlash('La categoria  con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
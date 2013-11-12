<?php
class HistoriasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('historias', $this->Historia->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$historia = $this->Historia->findById($id);
		if (!$historia) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('historia', $historia);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Historia->create();
			if ($this->Historia->save($this->request->data)) {
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
	
		$historia = $this->Historia->findById($id);
		if (!$historia) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('historia') || $this->request->is('put')) {
			$this->Historia->id = $id;
			if ($this->Historia->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $historia;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Historia->delete($id)) {
			$this->Session->setFlash('La Historia con ID: ' . $id . ' fue borrada');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
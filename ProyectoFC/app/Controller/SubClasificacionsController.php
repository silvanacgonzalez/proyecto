<?php
class SubClasificacionsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('subclasificacions', $this->SubClasificacion->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Subclasificacion no encontrado'));
		}
		$subclasificacion = $this->SubClasificacion->findById($id);
		if (!$subclasificacion) {
			throw new NotFoundException(__('subclasificacion no encontrado'));
		}
			$this->set('subclasificacion', $subclasificacion);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->SubClasificacion->create();
			if ($this->SubClasificacion->save($this->request->data)) {
				$this->Session->setFlash('Subclasificacion se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Subclasificacion no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Subclasificacion no encontrado'));
		}
	
		$subclasificacion = $this->SubClasificacion->findById($id);
		if (!$subclasificacion) {
			throw new NotFoundException(__('Subclasificacion no encontrado'));
		}
	
		if ($this->request->is('subclasificacion') || $this->request->is('put')) {
			$this->SubClasificacion->id = $id;
			if ($this->SubClasificacion->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $subclasificacion;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->SubClasificacion->delete($id)) {
			$this->Session->setFlash('Sublcasificacion con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

<?php
class RubrosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('rubros', $this->Rubro->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Rubro no encontrado'));
		}
		$rol = $this->Rubro->findById($id);
		if (!$rubro) {
			throw new NotFoundException(__('rubro no encontrado'));
		}
			$this->set('rubro', $rubro);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Rubro->create();
			if ($this->Rubro->save($this->request->data)) {
				$this->Session->setFlash('El Rubro se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Rubro no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Rubro no encontrado'));
		}
	
		$rubro = $this->Rubro->findById($id);
		if (!$rubro) {
			throw new NotFoundException(__('Rubro no encontrado'));
		}
	
		if ($this->request->is('rubro') || $this->request->is('put')) {
			$this->Rubro->id = $id;
			if ($this->Rubro->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $rubro;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Rubro->delete($id)) {
			$this->Session->setFlash('El Rubro con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

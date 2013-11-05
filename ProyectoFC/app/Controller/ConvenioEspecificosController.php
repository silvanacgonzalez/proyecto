<?php
class ConvenioEspecificosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('convenioespecificos', $this->ConvenioEspecifico->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
		$convenioespecifico = $this->ConvenioEspecifico->findById($id);
		if (!$convenioespecifico) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
			$this->set('convenioespecifico', $convenioespecifico);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ConvenioEspecifico->create();
			if ($this->ConvenioEspecifico->save($this->request->data)) {
				$this->Session->setFlash('El Convenio Especifico se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Convenio Especifico no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
	
		$convenioespecifico = $this->ConvenioEspecifico->findById($id);
		if (!$convenioespecifico) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
	
		if ($this->request->is('convenioespecifico') || $this->request->is('put')) {
			$this->ConvenioEspecifico->id = $id;
			if ($this->ConvenioEspecifico->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $convenioespecifico;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ConvenioEspecifico->delete($id)) {
			$this->Session->setFlash('El Convenio Especifico con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
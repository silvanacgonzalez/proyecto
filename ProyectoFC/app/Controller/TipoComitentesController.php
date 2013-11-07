<?php
class TipoComitentesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('tipocomitentes', $this->TipoComitente->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('TipoComitente no encontrado'));
		}
		$tipocomitente = $this->TipoComitente->findById($id);
		if (!$tipocomitente) {
			throw new NotFoundException(__('Tipo Comitente no encontrado'));
		}
			$this->set('tipocomitente', $tipocomitente);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoComitente->create();
			if ($this->TipoComitente->save($this->request->data)) {
				$this->Session->setFlash('El Tipo Comitente se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Tipo Comitente no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Tipo Comitente no encontrado'));
		}
	
		$tipocomitente = $this->TipoComitente->findById($id);
		if (!$tipocomitente) {
			throw new NotFoundException(__('Tipo comitente no encontrado'));
		}
	
		if ($this->request->is('tipocomitente') || $this->request->is('put')) {
			$this->TipoComitente->id = $id;
			if ($this->TipoComitente->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $tipocomitente;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->TipoComitente->delete($id)) {
			$this->Session->setFlash('El tipo comintente con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
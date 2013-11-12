<?php
class FacturaEmitidasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('facturaemitidas', $this->FacturaEmitida->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$facturaemitida = $this->FacturaEmitida->findById($id);
		if (!$facturaemitida) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('facturaemitida', $facturaemitida);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->FacturaEmitida->create();
			if ($this->FacturaEmitida->save($this->request->data)) {
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
	
		$facturaemitida = $this->FacturaEmitida->findById($id);
		if (!$facturaemitida) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('facturaemitida') || $this->request->is('put')) {
			$this->FacturaEmitida->id = $id;
			if ($this->FacturaEmitida->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $facturaemitida;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->FacturaEmitida->delete($id)) {
			$this->Session->setFlash('La factura con ID: ' . $id . ' fue borrada');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
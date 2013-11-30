<?php
class FacturaRecibidasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('facturarecibidas', $this->FacturaRecibida->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$facturarecibida = $this->FacturaRecibida->findById($id);
		if (!$facturarecibida) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('facturarecibida', $facturarecibida);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->FacturaRecibida->create();
			if ($this->FacturaRecibida->save($this->request->data)) {
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
	
		$facturarecibida = $this->FacturaRecibida->findById($id);
		if (!$facturarecibida) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('facturarecibida') || $this->request->is('put')) {
			$this->FacturaRecibida->id = $id;
			if ($this->FacturaRecibida->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $facturarecibida;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->FacturaRecibida->delete($id)) {
			$this->Session->setFlash('La factura con ID: ' . $id . ' fue borrada');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
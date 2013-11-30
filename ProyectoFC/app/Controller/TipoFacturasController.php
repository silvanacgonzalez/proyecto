<?php
class TipoFacturasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('tipofacturas', $this->TipoFactura->find('all'));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Tipo Factura no encontrado'));
		}
		$tipofactura = $this->TipoFactura->findById($id);
		if (!$tipofactura) {
			throw new NotFoundException(__('Tipo Factura no encontrado'));
		}
			$this->set('tipofactura', $tipofactura);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoFactura->create();
			if ($this->TipoFactura->save($this->request->data)) {
				$this->Session->setFlash('Tipo Factura se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Tipo Factura no pudo ser grabado');
			}
		}
	}
	
		public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Tipo Factura no encontrado'));
		}
	
		$tipofactura = $this->TipoFactura->findById($id);
		if (!$tipofactura) {
			throw new NotFoundException(__('Tipo Factura no encontrado'));
		}
	
		if ($this->request->is('tipofactura') || $this->request->is('put')) {
			$this->TipoFactura->id = $id;
			if ($this->TipoFactura->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $tipofactura;
		}
	}
	
		
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->TipoFactura->delete($id)) {
			$this->Session->setFlash('Tipo Factura con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

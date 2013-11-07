<?php
class TipoPagosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('tipopagos', $this->TipoPago->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('tipo pago no encontrado'));
		}
		$tipopago = $this->TipoPago->findById($id);
		if (!$tipopago) {
			throw new NotFoundException(__('Tipo Pago no encontrado'));
		}
			$this->set('tipopago', $tipopago);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoPago->create();
			if ($this->TipoPago->save($this->request->data)) {
				$this->Session->setFlash('El Tipo pago se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El tipo pago no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Tipo Pago no encontrado'));
		}
	
		$tipopago = $this->TipoPago->findById($id);
		if (!$tipopago) {
			throw new NotFoundException(__('tipo Pago no encontrado'));
		}
	
		if ($this->request->is('tipopago') || $this->request->is('put')) {
			$this->TipoPago->id = $id;
			if ($this->TipoPago->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $tipopago;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->TipoPago->delete($id)) {
			$this->Session->setFlash('El Tipo Pago con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
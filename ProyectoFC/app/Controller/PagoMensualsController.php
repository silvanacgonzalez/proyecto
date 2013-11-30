<?php
class PagoMensualsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('pagomensuals', $this->PagoMensual->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pago Mensual no encontrado'));
		}
		$pagomensual = $this->PagoMensual->findById($id);
		if (!$pagomensual) {
			throw new NotFoundException(__('Pago Mensual no encontrado'));
		}
			$this->set('pagomensual', $pagomensual);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->PagoMensual->create();
			if ($this->PagoMensual->save($this->request->data)) {
				$this->Session->setFlash('El Pago Mensual se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Pago Mensual no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pago Mensual no encontrado'));
		}
	
		$pagomensual = $this->PagoMensual->findById($id);
		if (!$pagomensual) {
			throw new NotFoundException(__('Pago Mensual no encontrado'));
		}
	
		if ($this->request->is('pagomensual') || $this->request->is('put')) {
			$this->PagoMensual->id = $id;
			if ($this->PagoMensual->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $pagomensual;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->PagoMensual->delete($id)) {
			$this->Session->setFlash('El Pago Mensual con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
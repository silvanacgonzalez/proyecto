<?php
class FacEmitDetallesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('facemitdetalles', $this->FacEmitDetalle->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$facemitdetalle = $this->FacEmitDetalle->findById($id);
		if (!$facemitdetalle) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('facemitdetalle', $facemitdetalle);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->FacEmitDetalle->create();
			if ($this->FacEmitDetalle->save($this->request->data)) {
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
	
		$facemitdetalle = $this->FacEmitDetalle->findById($id);
		if (!$facemitdetalle) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('facemitdetalle') || $this->request->is('put')) {
			$this->FacEmitDetalle->id = $id;
			if ($this->FacEmitDetalle->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $facemitdetalle;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->FacEmitDetalle->delete($id)) {
			$this->Session->setFlash('El detalle de la fatura con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
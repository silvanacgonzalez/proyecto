<?php
class FacRecDetallesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('facrecdetalles', $this->FacRecDetalle->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$facrecdetalle = $this->FacRecDetalle->findById($id);
		if (!$facrecdetalle) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('facrecdetalle', $facrecdetalle);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->FacRecDetalle->create();
			if ($this->FacRecDetalle->save($this->request->data)) {
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
	
		$facrecdetalle = $this->FacRecDetalle->findById($id);
		if (!$facrecdetalle) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('facrecdetalle') || $this->request->is('put')) {
			$this->FacRecDetalle->id = $id;
			if ($this->FacRecDetalle->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $facrecdetalle;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->FacRecDetalle->delete($id)) {
			$this->Session->setFlash('El detalle de la fatura con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
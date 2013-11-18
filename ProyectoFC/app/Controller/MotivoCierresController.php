<?php
class MotivoCierresController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('motivocierres', $this->MotivoCierre->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$motivocierre = $this->MotivoCierre->findById($id);
		if (!$motivocierre) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('motivocierre', $motivocierre);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->MotivoCierre->create();
			if ($this->MotivoCierre->save($this->request->data)) {
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
	
		$motivocierre = $this->MotivoCierre->findById($id);
		if (!$motivocierre) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('motivocierre') || $this->request->is('put')) {
			$this->MotivoCierre->id = $id;
			if ($this->MotivoCierre->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $motivocierre;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->MotivoCierre->delete($id)) {
			$this->Session->setFlash('El Motivo de Cierre con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
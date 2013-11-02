<?php
class ActaAcuerdosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('actaacuerdos', $this->ActaAcuerdo->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
		$actaacuerdo = $this->ActaAcuerdo->findById($id);
		if (!$actaacuerdo) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
			$this->set('actaacuerdo', $actaacuerdo);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ActaAcuerdo->create();
			if ($this->ActaAcuerdo->save($this->request->data)) {
				$this->Session->setFlash('El Acta Acuerdo se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Acta Acuerdo no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
	
		$actaacuerdo = $this->ActaAcuerdo->findById($id);
		if (!$actaacuerdo) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
	
		if ($this->request->is('actaacuerdo') || $this->request->is('put')) {
			$this->ActaAcuerdo->id = $id;
			if ($this->ActaAcuerdo->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $actaacuerdo;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ActaAcuerdo->delete($id)) {
			$this->Session->setFlash('El Acta Acuerdo con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
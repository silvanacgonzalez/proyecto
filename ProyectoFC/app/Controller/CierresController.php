<?php
class CierresController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('cierres', $this->Cierre->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Cierre no encontrado'));
		}
		$cierre = $this->Cierre->findById($id);
		if (!$cierre) {
			throw new NotFoundException(__('Cierre no encontrado'));
		}
			$this->set('cierre', $cierre);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Cierre->create();
			if ($this->Cierre->save($this->request->data)) {
				$this->Session->setFlash('El cierre se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El cierre no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Cierre no encontrado'));
		}
	
		$cierre = $this->Cierre->findById($id);
		if (!$cierre) {
			throw new NotFoundException(__('Cierre no encontrado'));
		}
	
		if ($this->request->is('cierre') || $this->request->is('put')) {
			$this->Cierre->id = $id;
			if ($this->Cierre->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $cierre;
		}
	}
		
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Cierre->delete($id)) {
			$this->Session->setFlash('El cierre con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
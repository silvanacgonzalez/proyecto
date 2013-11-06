<?php
class ProyectosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('proyectos', $this->Proyecto->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
		$proyecto = $this->Proyecto->findById($id);
		if (!$proyecto) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
			$this->set('proyecto', $proyecto);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash('El Proyecto se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Proyecto no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
	
		$proyecto = $this->Proyecto->findById($id);
		if (!$proyecto) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
	
		if ($this->request->is('proyecto') || $this->request->is('put')) {
			$this->Proyecto->id = $id;
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $proyecto;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Proyecto->delete($id)) {
			$this->Session->setFlash('El proyecto con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

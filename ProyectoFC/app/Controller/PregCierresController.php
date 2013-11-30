<?php
class PregCierresController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('pregcierres', $this->PregCierre->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pregunta Cierre no encontrado'));
		}
		$preg_cierre = $this->PregCierre->findById($id);
		if (!$preg_cierre) {
			throw new NotFoundException(__('Pregunta Cierre no encontrado'));
		}
			$this->set('pregcierre', $preg_cierre);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->PregCierre->create();
			if ($this->PregCierre->save($this->request->data)) {
				$this->Session->setFlash('la Pregunta de cierre se grab� correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Pregunta de cierre no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pregunta de cierre no encontrado'));
		}
	
		$pregcierre = $this->PregCierre->findById($id);
		if (!$pregcierre) {
			throw new NotFoundException(__('Pregunta de Cierre no encontrado'));
		}
	
		if ($this->request->is('pregcierre') || $this->request->is('put')) {
			$this->PregCierre->id = $id;
			if ($this->PregCierre->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $pregcierre;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->PregCierre->delete($id)) {
			$this->Session->setFlash('La Pregunta de cierre con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

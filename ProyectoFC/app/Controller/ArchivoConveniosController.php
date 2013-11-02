<?php
class ArchivoConveniosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('archivoconvenios', $this->ArchivoConvenio->find('all'));
	}
	
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Archivo Convenios no encontrado'));
		}
		$archivoconvenio = $this->ArchivoConvenio->findById($id);
		if (!$archivoconvenio) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
			$this->set('archivoconvenio', $archivoconvenio);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ArchivoConvenio->create();
			if ($this->ArchivoConvenio->save($this->request->data)) {
				$this->Session->setFlash('El Archivo Convenio se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Archivo Convenio no pudo ser grabado');
			}
		}
	}
	
public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
	
		$archivoconvenio = $this->ArchivoConvenio->findById($id);
		if (!$archivoconvenio) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
	
		if ($this->request->is('archivoconvenio') || $this->request->is('put')) {
			$this->ArchivoConvenio->id = $id;
			if ($this->ArchivoConvenio->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $archivoconvenio;
		}
	}
		public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ArchivoConvenio->delete($id)) {
			$this->Session->setFlash('El Archivo Convenio con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>

<?php
class FrecuenciasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');

	public function index() {
		$this->set('frecuencias', $this->Frecuencia->find('all'));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$frecuencia = $this->Frecuencia->findById($id);
		if (!$frecuencia) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$this->set('frecuencia', $frecuencia);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Frecuencia->create();
			if ($this->Frecuencia->save($this->request->data)) {
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

		$frecuencia = $this->Frecuencia->findById($id);
		if (!$frecuencia) {
			throw new NotFoundException(__('Dato no encontrado'));
		}

		if ($this->request->is('frecuencia') || $this->request->is('put')) {
			$this->Frecuencia->id = $id;
			if ($this->Frecuencia->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $frecuencia;
		}
	}

		public function delete($id) {
			if ($this->request->is('get')) {
				throw new MethodNotAllowedException();
			}

			if ($this->Frecuencia->delete($id)) {
				$this->Session->setFlash('La Frecuencia con ID: ' . $id . ' fue borrada');
				$this->redirect(array('action' => 'index'));
			}
		}
}

?>
<?php
/**
 * BoletosController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Boleto           $Boleto
 */
class BoletosController extends AppController {

	public $name = 'Boletos';

	public function admin_index() {
		$this->Boleto->recursive = 0;
		$this->set('boletos', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid boleto', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('boleto', $this->Boleto->read(null, $id));
	}

	public function admin_add($selecao_id = null) {
		if (!empty($this->data)) {
			$this->Boleto->create();
			if ($this->Boleto->save($this->data)) {
				$this->Session->setFlash(__('O boleto foi salvo', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O boleto não pôde ser salvo. Tente novamente.', true), 'flash');
			}
		}
		$this->data = $this->Boleto->find('first', array('order' => array('Boleto.id DESC')));
		$this->set(compact('selecao_id'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid boleto', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Boleto->save($this->data)) {
				$this->Session->setFlash(__('The boleto has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boleto could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Boleto->read(null, $id);
		}
		$selecoes = $this->Boleto->Selecao->find('list');
		$this->set(compact('selecoes'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for boleto', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Boleto->delete($id)) {
			$this->Session->setFlash(__('Boleto deleted', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Boleto was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}

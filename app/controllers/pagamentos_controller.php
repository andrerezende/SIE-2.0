<?php
class PagamentosController extends AppController {

	public $name = 'Pagamentos';

	public function admin_index() {
		$this->Pagamento->recursive = 0;
		$this->set('pagamentos', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pagamento', $this->Pagamento->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Pagamento->create();
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(__('The pagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagamento could not be saved. Please, try again.', true));
			}
		}
		$inscricoes = $this->Pagamento->Inscricao->find('list');
		$this->set(compact('inscricoes'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(__('The pagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pagamento->read(null, $id);
		}
		$inscricoes = $this->Pagamento->Inscricao->find('list');
		$this->set(compact('inscricoes'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pagamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pagamento->delete($id)) {
			$this->Session->setFlash(__('Pagamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pagamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function admin_conciliacao() {
		if (!empty($this->data)) {
			$this->Pagamento->Behaviors->attach(
				'MeioUpload.MeioUpload', array(
					'arqretorno' => array(
						'allowedExt' => array('.ret'),
						'fixFilename' => false,
					)
				)
			);
			$path = dirname(dirname(__FILE__)) . DS . 'conciliacao' . DS;
			$fileName = $this->data['Pagamento']['arqretorno']['name'];
			if (move_uploaded_file($this->data['Pagamento']['arqretorno']['tmp_name'],
					$path . $fileName)) {
				$fileLines = file($path.$fileName);
				$this->set(compact('fileLines', 'fileName', 'path'));
				$this->render('admin_conciliacao_confirmacao');
			}
		}
	}

	public function admin_conciliacao_importar() {
		if (!empty($this->data)) {
//			debug($this->data);exit;
			$fileLines = file($this->data['Pagamento']['path'] . $this->data['Pagamento']['fileName']);
			$fileName = $this->data['Pagamento']['fileName'];

			$fileSize = sizeof($fileLines);
			$count = 0;
			$error = '';
			$pos = 1;
			for ($i= 2 ; $i < $fileSize -2; $i++) {
				if ($pos == 1) {
					$inscritoId = "";
					for ($j = 46; $j < 54; $j++) {
						$inscritoId .= $fileLines[$i]{$j};
					}
					$pos++;
				} else if ($pos == 2) {
					$dataPagamento = "";
					$diaPagamento   = $fileLines[$i][137] . $fileLines[$i][138];
					$mesPagamaento  = $fileLines[$i][139] . $fileLines[$i][140]."-";
					$anoPagamento   = $fileLines[$i][141] . $fileLines[$i][142] . $fileLines[$i][143] . $fileLines[$i][144] . "-";

					for ($k = 137; $k < 145; $k++) {
						$dataPagamento .= $fileLines[$i]{$k};
						if ($k == 138 || $k == 140) {
							$dataPagamento .= "/";
						}
					}

					$dataArquivo = "";
					$diaArquivo = $fileLines[$i][145] . $fileLines[$i][146];
					$mesArquivo = $fileLines[$i][147] . $fileLines[$i][148] . "-";
					$anoArquivo = $fileLines[$i][149] . $fileLines[$i][150] .$fileLines[$i][151] . $fileLines[$i][152] . "-";

					for ($l = 145 ; $l < 154; $l++) {
						$dataArquivo .= $fileLines[$i]{$l};
						if ($l == 146 || $l == 148) {
							$dataArquivo .= "/";
						}
					}

					$dataPagamento = $anoPagamento . $mesPagamaento . $diaPagamento;
					$dataArquivo = $anoArquivo . $mesArquivo . $diaArquivo;

					$data = array('Pagamento' => array(
						'inscricao_id' => 9,
						'arqretorno' => $fileName,
						'data_pagamento' => $dataPagamento,
						'data_retorno' => $dataArquivo,
						'data_importacao' => date('Y-m-d')
					));
					if (!$this->Pagamento->save($data, false)) {
						$count++;
						$error .= $inscritoId . '<br />';
					}
					$pos = 1;
				}
			}
			if ($count == 0) {
				$this->Session->setFlash('Arquivo importado com sucesso');
			} else {
				$this->Session->setFlash('Os seguintes registros não foram importados:' . $error . '<br />Total de registros não importados: ' . $count);
			}
			$this->redirect(array('action' => 'index'));
		}
	}

}
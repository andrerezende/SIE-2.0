<?php echo $this->Form->create('Pagamento', array('type' => 'file'));?>
<?php echo $this->Form->input('arqretorno', array('type' => 'file', 'label' => 'Arquivo de Retorno'));?>
<?php echo $this->Form->submit('Enviar', array('id' => 'SubmitConciliacao'));?>
<?php echo $this->Form->end();?>
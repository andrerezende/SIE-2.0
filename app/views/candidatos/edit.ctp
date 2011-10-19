<div class="candidatos form">
<?php echo $this->Form->create('Candidato');?>
	<fieldset>
		<legend><?php __('Editar Candidato'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('endereco');
		echo $this->Form->input('data_expedicao');
		echo $this->Form->input('data_nascimento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('unidade_federativa_id');
		echo $this->Form->input('municipio_id');
		echo $this->Form->input('pais_id');
		echo $this->Form->input('naturalidade_municipio_id');
		echo $this->Form->input('orgao_expedidor_unidade_federativa_id');
		echo $this->Form->input('sexo_id');
		echo $this->Form->input('orgao_expedidor');
		echo $this->Form->input('nacionalidade_pais_id');
		echo $this->Form->input('cep');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('email');
		echo $this->Form->input('necessidade_especial_id');
		echo $this->Form->input('estado_civil_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="candidatos form">
<?php echo $this->Form->create('Candidato');?>
	<fieldset>
		<legend><?php __('Edit Candidato'); ?></legend>
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
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Candidato.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Candidato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Unidade Federativas', true), array('controller' => 'unidade_federativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Federativa', true), array('controller' => 'unidade_federativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sexos', true), array('controller' => 'sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sexo', true), array('controller' => 'sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Necessidade Especiais', true), array('controller' => 'necessidade_especiais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Necessidade Especial', true), array('controller' => 'necessidade_especiais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Civis', true), array('controller' => 'estado_civis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Civil', true), array('controller' => 'estado_civis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
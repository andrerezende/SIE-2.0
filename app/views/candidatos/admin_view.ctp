<div class="span9">
	<div class="page-header">
		<h2>Candidato: <?php echo $candidato['Candidato']['nome']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $candidato['Candidato']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $candidato['Candidato']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl>
		<dt>CPF</dt>
		<dd><?php echo $candidato['Candidato']['cpf']; ?>&nbsp;</dd>
		<dt>RG</dt>
		<dd><?php echo $candidato['Candidato']['rg']; ?>&nbsp;</dd>
		<dt>Estado Civil</dt>
		<dd><?php echo $this->Html->link($candidato['EstadoCivil']['descricao'], array('controller' => 'estado_civis', 'action' => 'view', $candidato['EstadoCivil']['id'])); ?>&nbsp;</dd>
		<dt>Sexo</dt>
		<dd><?php echo $this->Html->link($candidato['Sexo']['descricao'], array('controller' => 'sexos', 'action' => 'view', $candidato['Sexo']['id'])); ?>&nbsp;</dd>
		<dt>Endereço</dt>
		<dd><?php echo $candidato['Candidato']['endereco']; ?> <br />
			<?php echo $candidato['Candidato']['bairro']; ?> <br />
			<?php echo $this->Html->link($candidato['Municipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $candidato['Municipio']['id'])); ?> /
			<?php echo $this->Html->link($candidato['UnidadeFederativa']['sigla'], array('controller' => 'unidade_federativas', 'action' => 'view', $candidato['UnidadeFederativa']['id'])); ?>
			&nbsp;
		</dd>
		<dt>Data Expedição</dt>
		<dd><?php echo $candidato['Candidato']['data_expedicao']; ?>&nbsp;</dd>
		<dt>Data de Nascimento</dt>
		<dd><?php echo $candidato['Candidato']['data_nascimento']; ?>&nbsp;</dd>
		<dt>País</dt>
		<dd><?php echo $this->Html->link($candidato['Pais']['nome'], array('controller' => 'paises', 'action' => 'view', $candidato['Pais']['id'])); ?>&nbsp;</dd>
		<dt>Naturalidade Municipio</dt>
		<dd><?php echo $this->Html->link($candidato['NaturalidadeMunicipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $candidato['NaturalidadeMunicipio']['id'])); ?>&nbsp;</dd>
		<dt>Orgão Expedidor</dt>
		<dd><?php echo $candidato['Candidato']['orgao_expedidor']  . ' / ' . $candidato['OrgaoExpedidorUnidadeFederativa']['sigla']; ?>&nbsp;</dd>
		<dt>Nacionalidade</dt>
		<dd><?php echo $this->Html->link($candidato['NacionalidadePais']['nome'], array('controller' => 'paises', 'action' => 'view', $candidato['NacionalidadePais']['id'])); ?>&nbsp;</dd>
		<dt>CEP</dt>
		<dd><?php echo $candidato['Candidato']['cep']; ?>&nbsp;</dd>
		<dt>Telefone</dt>
		<dd><?php echo $candidato['Candidato']['telefone']; ?>&nbsp;</dd>
		<dt>Celular</dt>
		<dd><?php echo $candidato['Candidato']['celular']; ?>&nbsp;</dd>
		<dt>Email</dt>
		<dd><?php echo $candidato['Candidato']['email']; ?>&nbsp;</dd>
		<dt>Necessidade Especial</dt>
		<dd><?php echo $this->Html->link($candidato['NecessidadeEspecial']['descricao'], array('controller' => 'necessidade_especiais', 'action' => 'view', $candidato['NecessidadeEspecial']['id'])); ?>&nbsp;</dd>
	</dl>

	<div>
		<h3>Inscrições</h3>
		<?php if (!empty($candidato['Inscricao'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Candidato</th>
						<th>Seleção</th>
						<th>Data</th>
						<th>Prova Especial</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($candidato['Inscricao'] as $inscricao):?>
						<tr>
							<td><?php echo $inscricao['id'];?></td>
							<td><?php echo $inscricao['candidato_id'];?></td>
							<td><?php echo $inscricao['selecao_id'];?></td>
							<td><?php echo $this->Formatacao->data($inscricao['data']);?></td>
							<td><?php echo $this->Util->boolean($inscricao['especial_prova']);?></td>
							<td>
								<?php echo $this->Html->link(__('View', true), array('controller' => 'inscricoes', 'action' => 'view', $inscricao['id'])); ?>
								<?php echo $this->Html->link(__('Edit', true), array('controller' => 'inscricoes', 'action' => 'edit', $inscricao['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>

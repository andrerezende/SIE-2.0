<?php echo $this->Html->script('jquery.maskedinput-1.3.min', array('inline' => false));?>
<script type="text/javascript">
	$(document).ready(function() {
		if ($("label[for='UsuarioLogin']").text() == "CPF") {
			$("#UsuarioLogin").mask("999.999.999-99");
		}
	});
</script>
<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Login'); ?></legend>
	<?php
	if ($isCandidato) {
		echo $this->Form->input('login', array('label' => 'CPF'));
	} else {
		echo $this->Form->input('login');
	}
	echo $this->Form->input('senha', array('type' => 'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>Instituto Federal Baiano</title>
		<?php
		echo $this->Html->css(array(
//			'grid',
			'admin',
			'bootstrap',
			'bootstrap-responsive',
		));

		echo $this->Html->script(array(
			'jquery',
			'bootstrap',
		));

		echo $scripts_for_layout;
		?>
	</head>
	<body>
		<?php echo $this->element('nav');?>
		<div id="container">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>

				<?php echo $content_for_layout; ?>

				<?php echo $this->element('menu');?>
			</div>
			<?php echo $this->element('footer');?>
		</div>
	</body>
</html>
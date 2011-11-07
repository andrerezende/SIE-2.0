<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<?php //echo $this->Html->css('reports' . DS . 'all', null, array('media' => 'screen')); ?>
		<style type="text/css">
			* {font-size: 90%;}
			body {font: 12px/1.7em "trebuchet ms", arial, sans-serif; background: #FFF; color: #444;}
			h1 {font-size: large;}
			table thead {font-size: medium;}
			table tbody tr td {font-size: small;}
			table.data { width: 100%; border: 0; margin-bottom: 2em; border-collapse: collapse;}
			table.data thead th {font-size: 12px; font-weight: bold; text-align: left; padding: 2px; background-color: #EEE; color: #333; border: 1px solid #ddd;}
			table.data td {vertical-align: top;}
			table.data tbody tr td {background: #FFF; border: 1px dotted #DDD;}
			table.data th {padding: 5px 0;}
			table.data tbody td {padding: 5px;}
			table.data tr.even td {background: #F9F9F9;}
			table.data.stripe tr:nth-child(odd) td {background-color:#F6F6F6;}
			table.data.stripe tr:nth-child(even) td {background-color:#FFF;}
		</style>
	</head>
	<body>
		<div id="wrapper" class="">
			<div id="content" class="">
				<div class="container">
					<?php echo $content_for_layout; ?>
				</div>
			</div>
		</div>
	</body>
</html>
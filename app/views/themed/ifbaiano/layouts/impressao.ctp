<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Instituto Federal Baiano</title>
		<?php
//		echo $this->Html->css(
//			array(
//				'grid',
//				'impressao',
//			), null, array('media' => 'screen')
//		);
//		echo $scripts_for_layout;
		?>
		<style type="text/css">

/*
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
*/
* {
	margin:0;
	padding:0;
}
body {
	margin: 0;
	padding: 0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #787878;
}

h1, h2, h3 {
	margin: 0;
	padding: 0;
	font-weight: normal;
	color: #000000;
}

h1 {
	font-size: 2em;
}

h2 {
	font-size: 2.4em;
}

h3 {
	font-size: 1.6em;
}

p, ul, ol {
	margin-top: 0;
	line-height: 180%;
}

ul, ol {
}

a {
	text-decoration: none;
	color: #7EAD01;
}

a:hover {
}

#wrapper {
	width: 1024px;
	margin: 0 auto;
	padding: 0;
}

/* Header */

#header {
	clear: both;
	width: 1024px;
	height: 178px;
	margin: 0 auto;
	padding: 0px;
	border: 2px solid #BDCC94;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}

/* Logo */

#logo {
	margin: 0;
	padding: 0px 0px 0px 60px;
	color: #000000;
}

#logo h1, #logo p {
	margin: 0;
	padding: 0;
}

#logo h1 {
	padding-top: 160px;
	letter-spacing: -1px;
	text-transform: lowercase;
	font-size: 3.8em;
}

#logo p {
	margin: 0;
	padding: 0px 0 0 10px;
	font: normal 14px Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #FFFFFF;
}

#logo a {
	border: none;
	background: none;
	text-decoration: none;
	color: #FFFFFF;
}

/* Search */

#search {
	float: right;
	width: 280px;
	height: 60px;
	padding: 10px 0px 0px 0px;
	background: #E2E2E2;
	border-bottom: 4px solid #FFFFFF;
}

/** Tables **/
table {
	background: #fff;
	border-right:0;
	clear: both;
	color: #333;
	margin-bottom: 10px;
	width: 100%;
}
th {
	min-width: 70px;
	border:0;
	border-bottom:2px solid #555;
	text-align: left;
	padding:4px;
}
th a {
	display: block;
	padding: 2px 4px;
	text-decoration: none;
}
th a.asc:after {
	content: ' ⇣';
}
th a.desc:after {
	content: ' ⇡';
}
table tr td {
	background: #fff;
	padding: 6px;
	text-align: left;
	vertical-align: top;
	border-bottom:1px solid #ddd;
}
table tr:nth-child(2n) td {
	background: #f5f5f5;
}
table .altrow td {
	background: #f5f5f5;
}
td.actions {
	text-align: center;
	white-space: nowrap;
}
table td.actions a {
	margin: 0px 6px;
	padding:2px 5px;
}

/* Page */

#page {
	width: 1024px;
	margin: 0 auto;
	padding: 0px 0px 0px 0px;
}

#page-bgtop {
	padding: 20px 0px;
}

#page-bgbtm {
}

/* Content */

#content {
	float: right;
	width: 100%;
	padding: 0px 0px 0px 0px;
}

.post {
	margin-bottom: 15px;
}

.post-bgtop {
}

.post-bgbtm {
}

.post h4 {
	text-align: right;
}

.post .title {
	height: 38px;
	margin-bottom: 10px;
	padding: 12px 0 0 0px;
	letter-spacing: -.5px;
	color: #000000;
}

.post .title a {
	color: #000000;
	border: none;
}

.post .meta {
	margin-bottom: 30px;
	padding: 5px 0px 15px 0px;
	text-align: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
}

.post .meta .date {
	float: left;
}

.post .meta .posted {
	float: right;
}

.post .meta a {
}

.post .entry {
	padding: 0px 0px 20px 0px;
	padding-bottom: 20px;
	text-align: justify;
}

.links {
	padding-top: 20px;
	font-size: 12px;
	font-weight: bold;
}


div.page {
	width: 700px;
}

.table-label {
	text-transform: uppercase;
	font-weight: bold;
	width: 20%;
}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1><?php echo $this->Html->image('topo-ifbaiano.png');?></h1>
			</div>
			<!-- end #menu -->
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<?php echo $this->Session->flash();?>
							<div class="post">
								<?php echo $content_for_layout; ?>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</div>
						<!-- end #content -->
						<div style="clear: both;">&nbsp;</div>
					</div>
				</div>
			</div>
			<!-- end #page -->
		</div>
	</body>
</html>
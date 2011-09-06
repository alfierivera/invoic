<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo \Uri::base(false).'assets/css/style.css'?>" type="text/css" id="" media="print, projection, screen" />
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="<?php echo \Uri::base(false).'assets/js/tablesorter.js'?>"></script>
	<script type="text/javascript" src="<?php echo \Uri::base(false).'assets/js/metadata.js'?>"></script>
	<script src="http://www.projectcodegen.com/jquery.ui.datetimepicker.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			$('table').tablesorter({ sortList: [[0,0]] });
			$("#form_init").datetimepicker();
		}); 
	</script>
</head>
<body>
	<div class="container">
		<h1><?php echo $title; ?></h1>
		<?php if (Session::get_flash('notice')): ?>
			<div class="notice"><p><?php echo implode('</p><p>', (array) Session::get_flash('notice')); ?></div></p>
		<?php endif; ?>

		<?php echo $content; ?>

		<footer>
			<a href="http://fuelphp.com">Fuel PHP</a> is released under the MIT license.<br />Page rendered in {exec_time}s using {mem_usage}mb of memory.
		</footer>
	</div>
</body>
</html>

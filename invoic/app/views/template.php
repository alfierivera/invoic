<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js" type="text/javascript"></script>
	<?php
		echo Asset::css('style.css');
		echo Asset::css('chosen.css');
		echo Asset::js('tablesorter.js');
		echo Asset::js('chosen.jquery.min.js');
		echo Asset::js('metadata.js');
		echo Asset::js('jquery.ui.datetimepicker.min.js');
	?>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			$('table').tablesorter({ sortList: [[0,0]] });
			$("#form_init").datetimepicker();
			$("#form_starts").datetimepicker();
			$("#form_ends").datetimepicker();
			$("#form_country").chosen();
		}); 
	</script>
</head>
<body>
<div class="topbar-wrapper" style="z-index: 5;"> 
    <div class="topbar"> 
      <div class="topbar-inner"> 
        <div class="container"> 
          <h3><?php echo Html::anchor(Uri::base(),'Invoic.it'); ?></h3> 
          <ul class="nav"> 
            <li <?php if (Uri::segment(1) == "clients" or Uri::segment(1) == false) { echo "class='active'"; } ?>><?php echo Html::anchor('clients','Clients'); ?></li>
            <li <?php if (Uri::segment(1) == "alerts") { echo "class='active'"; } ?>><?php echo Html::anchor('alerts','Alerts'); ?></li>
             <li <?php if (Uri::segment(1) == "events") { echo "class='active'"; } ?>><?php echo Html::anchor('events','Events'); ?></li>
          </ul> 
        </div> 
      </div><!-- /topbar-inner --> 
    </div><!-- /topbar --> 
  </div><!-- /topbar-wrapper --> 
	<div class="container">
		<h1><?php echo $title; ?></h1>
		<?php if (Session::get_flash('notice')): ?>
			 
			<div class="alert-message success"><a class="close" href="#">&times;</a><p><?php echo implode('</p><p>', (array) Session::get_flash('notice')); ?></div></p>
		<?php endif; ?>
		<?php echo $content; ?>

		<footer>
			<a href="http://fuelphp.com">Fuel PHP</a> is released under the MIT license.<br />Page rendered in {exec_time}s using {mem_usage}mb of memory.
		</footer>
	</div>
</body>
</html>

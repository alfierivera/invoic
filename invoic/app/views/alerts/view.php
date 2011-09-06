<p>
	<strong>Name:</strong>
	<?php echo $alert->name; ?></p>
<p>
	<strong>Identifier:</strong>
	<?php echo $alert->identifier; ?></p>
<p>
	<strong>Starts on:</strong>
	<?php echo \Date::factory($alert->init)->format('datepicker'); ?></p>
<p>
	<strong>Enabled:</strong>
	<?php echo $alert->enabled; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $alert->type; ?></p>

<?php echo Html::anchor('alerts/edit/'.$alert->id, 'Edit'); ?> | 
<?php echo Html::anchor('alerts', 'Back'); ?>

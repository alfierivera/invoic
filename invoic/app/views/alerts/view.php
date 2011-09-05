<p>
	<strong>Name:</strong>
	<?php echo $alert->name; ?></p>
<p>
	<strong>Identifier:</strong>
	<?php echo $alert->identifier; ?></p>
<p>
	<strong>Event id:</strong>
	<?php echo $alert->event_id; ?></p>
<p>
	<strong>Init:</strong>
	<?php echo $alert->init; ?></p>
<p>
	<strong>Enabled:</strong>
	<?php echo $alert->enabled; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $alert->type; ?></p>

<?php echo Html::anchor('alerts/edit/'.$alert->id, 'Edit'); ?> | 
<?php echo Html::anchor('alerts', 'Back'); ?>
<p>
	<strong>Name:</strong>
	<?php echo $event->name; ?></p>
<p>
	<strong>Identifier:</strong>
	<?php echo $event->identifier; ?></p>
<p>
	<strong>Starts:</strong>
	<?php echo $event->starts; ?></p>
<p>
	<strong>Ends:</strong>
	<?php echo $event->ends; ?></p>
<p>
	<strong>Repeat:</strong>
	<?php echo $event->repeat; ?></p>
<p>
	<strong>Reference:</strong>
	<?php echo $event->reference; ?></p>
<p>
	<strong>Reference ID:</strong>
	<?php echo $event->ref_id; ?></p>

<?php echo Html::anchor('events/edit/'.$event->id, 'Edit'); ?> | 
<?php echo Html::anchor('events', 'Back'); ?>

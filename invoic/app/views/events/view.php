<p>
	<strong>Name:</strong>
	<?php echo $event->name; ?></p>
<p>
	<strong>Starts:</strong>
	<?php echo \Date::factory($event->starts)->format('datepicker'); ?></p>
<p>
	<strong>Ends:</strong>
	<?php echo \Date::factory($event->ends)->format('datepicker'); ?></p>
<p>
	<strong>Repeat:</strong>
	<?php echo $event->repeat; ?></p>

<?php echo Html::anchor('events/edit/'.$event->id, 'Edit', array('class'=>'primary btn')); ?>&nbsp;<?php echo Html::anchor('events', 'Back', array('class'=>'btn')); ?>

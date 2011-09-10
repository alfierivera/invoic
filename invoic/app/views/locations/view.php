<p>
	<strong>Name:</strong>
	<?php echo $location->name; ?></p>
<p>
	<strong>Uri:</strong>
	<?php echo $location->uri; ?></p>

<?php echo Html::anchor('locations/edit/'.$location->id, 'Edit', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('locations', 'Back', array('class' => 'btn')); ?>

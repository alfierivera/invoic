<p>
	<strong>Role location id:</strong>
	<?php echo $right->role_location_id; ?></p>
<p>
	<strong>Create:</strong>
	<?php echo $right->create; ?></p>
<p>
	<strong>Read:</strong>
	<?php echo $right->read; ?></p>
<p>
	<strong>Update:</strong>
	<?php echo $right->update; ?></p>
<p>
	<strong>Delete:</strong>
	<?php echo $right->delete; ?></p>

<?php echo Html::anchor('rights/edit/'.$right->id, 'Edit', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('rights', 'Back', array('class' => 'btn')); ?>

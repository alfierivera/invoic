<p>
	<strong>Name:</strong>
	<?php echo $role->name; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $role->group_id; ?></p>

<?php echo Html::anchor('roles/edit/'.$role->id, 'Edit', array('class'=>'btn primary')); ?>&nbsp;<?php echo Html::anchor('roles', 'Back', array('class'=>'btn')); ?>

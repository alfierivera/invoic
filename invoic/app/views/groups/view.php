<p>
	<strong>Parent id:</strong>
	<?php echo $group->parent_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $group->name; ?></p>
<p>
	<strong>Role:</strong>
	<?php echo $group->role->name; ?></p>

<?php echo Html::anchor('groups/edit/'.$group->id, 'Edit', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('groups', 'Back', array('class' => 'btn')); ?>

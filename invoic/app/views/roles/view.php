<p>
	<strong>Name:</strong>
	<?php echo $role->name; ?></p>
<p>
	<strong>Group id:</strong>
	<?php echo $role->group_id; ?></p>

<?php echo Html::anchor('roles/edit/'.$role->id, 'Edit'); ?> | 
<?php echo Html::anchor('roles', 'Back'); ?>
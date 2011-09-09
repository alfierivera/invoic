<p>
	<strong>Parent id:</strong>
	<?php echo $group->parent_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $group->name; ?></p>

<?php echo Html::anchor('groups/edit/'.$group->id, 'Edit'); ?> | 
<?php echo Html::anchor('groups', 'Back'); ?>
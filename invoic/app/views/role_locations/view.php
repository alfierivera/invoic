<p>
	<strong>Role id:</strong>
	<?php echo $role_location->role_id; ?></p>
<p>
	<strong>Location id:</strong>
	<?php echo $role_location->location_id; ?></p>

<?php echo Html::anchor('role_locations/edit/'.$role_location->id, 'Edit'); ?> | 
<?php echo Html::anchor('role_locations', 'Back'); ?>
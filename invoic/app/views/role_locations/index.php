<h2 class="first">Listing Role_locations</h2>

<table cellspacing="0">
	<tr>
		<th>Role id</th>
		<th>Location id</th>
		<th></th>
	</tr>

	<?php foreach ($role_locations as $role_location): ?>	<tr>

		<td><?php echo $role_location->role_id; ?></td>
		<td><?php echo $role_location->location_id; ?></td>
		<td>
			<?php echo Html::anchor('role_locations/view/'.$role_location->id, 'View'); ?> |
			<?php echo Html::anchor('role_locations/edit/'.$role_location->id, 'Edit'); ?> |
			<?php echo Html::anchor('role_locations/delete/'.$role_location->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('role_locations/create', 'Add new Role location'); ?>
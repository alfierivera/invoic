<h2 class="first">Listing Roles</h2>

<table cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Group id</th>
		<th></th>
	</tr>

	<?php foreach ($roles as $role): ?>	<tr>

		<td><?php echo $role->name; ?></td>
		<td><?php echo $role->group_id; ?></td>
		<td>
			<?php echo Html::anchor('roles/view/'.$role->id, 'View'); ?> |
			<?php echo Html::anchor('roles/edit/'.$role->id, 'Edit'); ?> |
			<?php echo Html::anchor('roles/delete/'.$role->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('roles/create', 'Add new Role'); ?>
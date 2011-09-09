<h2 class="first">Listing Rights</h2>

<table cellspacing="0">
	<tr>
		<th>Role location id</th>
		<th>Create</th>
		<th>Read</th>
		<th>Update</th>
		<th>Delete</th>
		<th></th>
	</tr>

	<?php foreach ($rights as $right): ?>	<tr>

		<td><?php echo $right->role_location_id; ?></td>
		<td><?php echo $right->create; ?></td>
		<td><?php echo $right->read; ?></td>
		<td><?php echo $right->update; ?></td>
		<td><?php echo $right->delete; ?></td>
		<td>
			<?php echo Html::anchor('rights/view/'.$right->id, 'View'); ?> |
			<?php echo Html::anchor('rights/edit/'.$right->id, 'Edit'); ?> |
			<?php echo Html::anchor('rights/delete/'.$right->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('rights/create', 'Add new Right'); ?>
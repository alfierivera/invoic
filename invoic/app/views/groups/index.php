<h2 class="first">Listing Groups</h2>

<table cellspacing="0">
	<tr>
		<th>Parent id</th>
		<th>Name</th>
		<th></th>
	</tr>

	<?php foreach ($groups as $group): ?>	<tr>

		<td><?php echo $group->parent_id; ?></td>
		<td><?php echo $group->name; ?></td>
		<td>
			<?php echo Html::anchor('groups/view/'.$group->id, 'View'); ?> |
			<?php echo Html::anchor('groups/edit/'.$group->id, 'Edit'); ?> |
			<?php echo Html::anchor('groups/delete/'.$group->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('groups/create', 'Add new Group'); ?>
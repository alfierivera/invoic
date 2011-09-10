<h2 class="first">Listing Roles</h2>

<table class="zebra-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Group</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($roles as $role): ?>	<tr>

		<td><?php echo $role->name; ?></td>
		<td><?php echo $role->group_id; ?></td>
		<td>
			<?php echo Html::anchor('roles/view/'.$role->id, 'View', array('class'=>'btn primary')); ?>&nbsp;<?php echo Html::anchor('roles/edit/'.$role->id, 'Edit', array('class'=>'btn info')); ?>&nbsp;<?php echo Html::anchor('roles/delete/'.$role->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class'=>'btn danger')); ?></td>
	</tr>
	<?php endforeach; ?></tbody></table>

<br />

<?php echo Html::anchor('roles/create', 'Add new Role', array('class'=>'btn primary large')); ?>

<h2 class="first">Listing Rights</h2>

<table class="zebra-striped">
	<thead>
		<tr>
			<th>Location Name</th>
			<th>Create</th>
			<th>Read</th>
			<th>Update</th>
			<th>Delete</th>
			<th class="{sorter:false}">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($rights as $right): ?>	<tr>

		<td><?php echo $right->role_location_id; ?></td>
		<td><?php echo $right->create; ?></td>
		<td><?php echo $right->read; ?></td>
		<td><?php echo $right->update; ?></td>
		<td><?php echo $right->delete; ?></td>
		<td>
			<?php echo Html::anchor('rights/view/'.$right->id, 'View', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('rights/edit/'.$right->id, 'Edit', array('class' => 'btn info')); ?>&nbsp;<?php echo Html::anchor('rights/delete/'.$right->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn danger')); ?>		</td>
	</tr>
	<?php endforeach; ?></tbody></table>

<br />

<?php echo Html::anchor('rights/create', 'Add new Right', array('class' => 'btn primary large')); ?>

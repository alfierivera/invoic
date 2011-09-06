<h2 class="first">Listing Clients</h2>

<table class="zebra-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Website</th>
			<th>Email</th>
			<th>Priority</th>
			<th>Type</th>
			<th class="{sorter: false}">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>	<tr>
	
		<td><?php echo $client->name; ?></td>
		<td><?php echo $client->phone; ?></td>
		<td><?php echo $client->website; ?></td>
		<td><?php echo $client->email; ?></td>
		<td><?php echo $client->priority; ?></td>
		<td><?php echo $client->type; ?></td>
		<td>
			<?php echo Html::anchor('clients/view/'.$client->id, 'View', array('class' => 'btn primary')); ?> |
			<?php echo Html::anchor('clients/edit/'.$client->id, 'Edit', array('class' => 'btn')); ?> |
			<?php echo Html::anchor('clients/delete/'.$client->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn danger')); ?>		</td>
	</tr>
	<?php endforeach; ?></tbody></table>

<br />

<?php echo Html::anchor('clients/create', 'Add new Client', array('class' => 'btn large primary')); ?>

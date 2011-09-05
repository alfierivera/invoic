<h2 class="first">Listing Clients</h2>

<table cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Identifier</th>
		<th>Phone</th>
		<th>Fax</th>
		<th>Website</th>
		<th>Email</th>
		<th>Street 1</th>
		<th>Street 2</th>
		<th>City</th>
		<th>Province</th>
		<th>Country</th>
		<th>Notes</th>
		<th>Priority</th>
		<th>Language</th>
		<th>Type</th>
		<th></th>
	</tr>

	<?php foreach ($clients as $client): ?>	<tr>

		<td><?php echo $client->name; ?></td>
		<td><?php echo $client->identifier; ?></td>
		<td><?php echo $client->phone; ?></td>
		<td><?php echo $client->fax; ?></td>
		<td><?php echo $client->website; ?></td>
		<td><?php echo $client->email; ?></td>
		<td><?php echo $client->street_1; ?></td>
		<td><?php echo $client->street_2; ?></td>
		<td><?php echo $client->city; ?></td>
		<td><?php echo $client->province; ?></td>
		<td><?php echo $client->country; ?></td>
		<td><?php echo $client->notes; ?></td>
		<td><?php echo $client->priority; ?></td>
		<td><?php echo $client->language; ?></td>
		<td><?php echo $client->type; ?></td>
		<td>
			<?php echo Html::anchor('clients/view/'.$client->id, 'View'); ?> |
			<?php echo Html::anchor('clients/edit/'.$client->id, 'Edit'); ?> |
			<?php echo Html::anchor('clients/delete/'.$client->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('clients/create', 'Add new Client'); ?>
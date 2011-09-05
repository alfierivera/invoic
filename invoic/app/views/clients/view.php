<p>
	<strong>Name:</strong>
	<?php echo $client->name; ?></p>
<p>
	<strong>Identifier:</strong>
	<?php echo $client->identifier; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $client->phone; ?></p>
<p>
	<strong>Fax:</strong>
	<?php echo $client->fax; ?></p>
<p>
	<strong>Website:</strong>
	<?php echo $client->website; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $client->email; ?></p>
<p>
	<strong>Street 1:</strong>
	<?php echo $client->street_1; ?></p>
<p>
	<strong>Street 2:</strong>
	<?php echo $client->street_2; ?></p>
<p>
	<strong>City:</strong>
	<?php echo $client->city; ?></p>
<p>
	<strong>Province:</strong>
	<?php echo $client->province; ?></p>
<p>
	<strong>Country:</strong>
	<?php echo $client->country; ?></p>
<p>
	<strong>Notes:</strong>
	<?php echo $client->notes; ?></p>
<p>
	<strong>Priority:</strong>
	<?php echo $client->priority; ?></p>
<p>
	<strong>Language:</strong>
	<?php echo $client->language; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $client->type; ?></p>

<?php echo Html::anchor('clients/edit/'.$client->id, 'Edit'); ?> | 
<?php echo Html::anchor('clients', 'Back'); ?>
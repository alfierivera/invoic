<h2 class="first">Listing Alerts</h2>

<table class="zebra-striped" id="alertst">
	<thead>
		<tr>
			<th>Name</th>
			<th>Starts on</th>
			<th>Enabled</th>
			<th>Type</th>
			<th class="{sorter: false}">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($alerts as $alert): ?>	<tr>

		<td><?php echo $alert->name; ?></td>
		<td><?php echo Date::factory($alert->init)->format("datepicker"); ?></td>
		<td><?php echo $alert->enabled; ?></td>
		<td><?php echo $alert->type; ?></td>
		<td>
			<?php echo Html::anchor('alerts/view/'.$alert->id, 'View', array('class' => 'btn primary')); ?> |
			<?php echo Html::anchor('alerts/edit/'.$alert->id, 'Edit', array('class' => 'btn')); ?> |
			<?php echo Html::anchor('alerts/delete/'.$alert->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn danger')); ?>		</td>
	</tr>
	<?php endforeach; ?></tbody></table>

<br />

<?php echo Html::anchor('alerts/create', 'Add new Alert', array('class' => 'btn large primary')); ?>

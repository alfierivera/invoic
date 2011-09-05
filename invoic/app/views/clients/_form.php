<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
<?php echo Form::textarea('name', Input::post('name', isset($client) ? $client->name : ''), array('cols' => 60, 'rows' => 8)); ?>
	</p>
	<p>
		<?php echo Form::label('Identifier', 'identifier'); ?>
<?php echo Form::input('identifier', Input::post('identifier', isset($client) ? $client->identifier : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Phone', 'phone'); ?>
<?php echo Form::input('phone', Input::post('phone', isset($client) ? $client->phone : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Fax', 'fax'); ?>
<?php echo Form::input('fax', Input::post('fax', isset($client) ? $client->fax : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Website', 'website'); ?>
<?php echo Form::input('website', Input::post('website', isset($client) ? $client->website : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Email', 'email'); ?>
<?php echo Form::input('email', Input::post('email', isset($client) ? $client->email : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Street 1', 'street_1'); ?>
<?php echo Form::input('street_1', Input::post('street_1', isset($client) ? $client->street_1 : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Street 2', 'street_2'); ?>
<?php echo Form::input('street_2', Input::post('street_2', isset($client) ? $client->street_2 : '')); ?>
	</p>
	<p>
		<?php echo Form::label('City', 'city'); ?>
<?php echo Form::input('city', Input::post('city', isset($client) ? $client->city : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Province', 'province'); ?>
<?php echo Form::input('province', Input::post('province', isset($client) ? $client->province : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Country', 'country'); ?>
<?php echo Form::input('country', Input::post('country', isset($client) ? $client->country : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Notes', 'notes'); ?>
<?php echo Form::textarea('notes', Input::post('notes', isset($client) ? $client->notes : ''), array('cols' => 60, 'rows' => 8)); ?>
	</p>
	<p>
		<?php echo Form::label('Priority', 'priority'); ?>
<?php echo Form::input('priority', Input::post('priority', isset($client) ? $client->priority : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Language', 'language'); ?>
<?php echo Form::input('language', Input::post('language', isset($client) ? $client->language : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Type', 'type'); ?>
<?php echo Form::input('type', Input::post('type', isset($client) ? $client->type : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
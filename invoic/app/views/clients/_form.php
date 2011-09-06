<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
		<div class='input'>
<?php echo Form::input('name', Input::post('name', isset($client) ? $client->name : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Identifier', 'identifier'); ?>
		<div class='input'>
<?php echo Form::input('identifier', Input::post('identifier', isset($client) ? $client->identifier : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Phone', 'phone'); ?>
		<div class='input'>
<?php echo Form::input('phone', Input::post('phone', isset($client) ? $client->phone : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Fax', 'fax'); ?>
		<div class='input'>
<?php echo Form::input('fax', Input::post('fax', isset($client) ? $client->fax : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Website', 'website'); ?>
		<div class='input'>
<?php echo Form::input('website', Input::post('website', isset($client) ? $client->website : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Email', 'email'); ?>
		<div class='input'>
<?php echo Form::input('email', Input::post('email', isset($client) ? $client->email : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Street 1', 'street_1'); ?>
		<div class='input'>
<?php echo Form::input('street_1', Input::post('street_1', isset($client) ? $client->street_1 : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Street 2', 'street_2'); ?>
		<div class='input'>
<?php echo Form::input('street_2', Input::post('street_2', isset($client) ? $client->street_2 : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('City', 'city'); ?>
		<div class='input'>
<?php echo Form::input('city', Input::post('city', isset($client) ? $client->city : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Province', 'province'); ?>
		<div class='input'>
<?php echo Form::input('province', Input::post('province', isset($client) ? $client->province : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Country', 'country'); ?>
		<div class='input'>
<?php echo Form::select('country', Input::post('country', isset($client) ? $client->country : ''),$select['countries']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Notes', 'notes'); ?>
		<div class='input'>
<?php echo Form::textarea('notes', Input::post('notes', isset($client) ? $client->notes : ''), array('cols' => 60, 'rows' => 8)); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Priority', 'priority'); ?>
		<div class='input'>
<?php echo Form::select('priority', Input::post('priority', isset($client) ? $client->priority : ''), $select['priorities']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Language', 'language'); ?>
		<div class='input'>
<?php echo Form::select('language', Input::post('language', isset($client) ? $client->language : ''), $select['languages']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Type', 'type'); ?>
		<div class='input'>
<?php echo Form::select('type', Input::post('type', isset($client) ? $client->type : ''), $select['types']); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn large primary')); ?>	</div>

<?php echo Form::close(); ?>

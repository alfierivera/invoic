<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
		<div class='input'>
<?php echo Form::input('name', Input::post('name', isset($alert) ? $alert->name : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Starts on', 'init'); ?>
		<div class='input'>
<?php echo Form::input('init', Input::post('init', isset($alert) ? Date::factory($alert->init)->format("datepicker") : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Enabled', 'enabled'); ?>
		<div class='input'>
<?php echo Form::select('enabled', Input::post('enabled', isset($alert) ? $alert->enabled : ''), $select['enabled']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Type', 'type'); ?>
		<div class='input'>
<?php echo Form::select('type', Input::post('type', isset($alert) ? $alert->type : ''), $select['types']); ?>
</div>
	</p>
	
	<p>
		<?php echo Form::label('Event', 'event_id'); ?>
		<div class='input'>
<?php echo Form::select('event_id', Input::post('event_id', isset($alert) ? $alert->event_id : ''), $select['events']); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn primary large')); ?>	</div>

<?php echo Form::close(); ?>

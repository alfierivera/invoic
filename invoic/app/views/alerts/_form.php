<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
<?php echo Form::input('name', Input::post('name', isset($alert) ? $alert->name : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Identifier', 'identifier'); ?>
<?php echo Form::input('identifier', Input::post('identifier', isset($alert) ? $alert->identifier : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Event id', 'event_id'); ?>
<?php echo Form::input('event_id', Input::post('event_id', isset($alert) ? $alert->event_id : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Init', 'init'); ?>
<?php echo Form::input('init', Input::post('init', isset($alert) ? $alert->init : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Enabled', 'enabled'); ?>
<?php echo Form::input('enabled', Input::post('enabled', isset($alert) ? $alert->enabled : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Type', 'type'); ?>
<?php echo Form::input('type', Input::post('type', isset($alert) ? $alert->type : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
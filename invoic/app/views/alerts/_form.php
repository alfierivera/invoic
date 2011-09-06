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
<?php echo Form::select('enabled', Input::post('enabled', isset($alert) ? $alert->enabled : ''), array('1'=>'Yes','0'=>'No')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Type', 'type'); ?>
		<div class='input'>
<?php echo Form::select('type', Input::post('type', isset($alert) ? $alert->type : ''), $types); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn primary large')); ?>	</div>

<?php echo Form::close(); ?>

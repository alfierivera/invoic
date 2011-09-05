<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Role id', 'role_id'); ?>
<?php echo Form::input('role_id', Input::post('role_id', isset($role_location) ? $role_location->role_id : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Location id', 'location_id'); ?>
<?php echo Form::input('location_id', Input::post('location_id', isset($role_location) ? $role_location->location_id : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Role location id', 'role_location_id'); ?>
<?php echo Form::input('role_location_id', Input::post('role_location_id', isset($right) ? $right->role_location_id : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Create', 'create'); ?>
<?php echo Form::input('create', Input::post('create', isset($right) ? $right->create : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Read', 'read'); ?>
<?php echo Form::input('read', Input::post('read', isset($right) ? $right->read : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Update', 'update'); ?>
<?php echo Form::input('update', Input::post('update', isset($right) ? $right->update : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Delete', 'delete'); ?>
<?php echo Form::input('delete', Input::post('delete', isset($right) ? $right->delete : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
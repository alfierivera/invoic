<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Role Location', 'role_location_id'); ?>
		<div class="input">
<?php echo Form::input('role_location_id', Input::post('role_location_id', isset($right) ? $right->role_location_id : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Create?', 'create'); ?>
		<div class="input">
<?php echo Form::select('create', Input::post('create', isset($right) ? $right->create : ''), $select['options']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Read?', 'read'); ?>
		<div class="input">
<?php echo Form::select('read', Input::post('read', isset($right) ? $right->read : ''), $select['options']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Update?', 'update'); ?>
		<div class="input">
<?php echo Form::select('update', Input::post('update', isset($right) ? $right->update : ''), $select['options']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Delete?', 'delete'); ?>
		<div class="input">
<?php echo Form::select('delete', Input::post('delete', isset($right) ? $right->delete : ''), $select['options']); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn primary large')); ?>	</div>

<?php echo Form::close(); ?>

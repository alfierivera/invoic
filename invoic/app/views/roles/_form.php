<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
<?php echo Form::input('name', Input::post('name', isset($role) ? $role->name : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Group id', 'group_id'); ?>
<?php echo Form::input('group_id', Input::post('group_id', isset($role) ? $role->group_id : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
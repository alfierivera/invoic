<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
		<div class="input">
<?php echo Form::input('name', Input::post('name', isset($role) ? $role->name : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Group', 'group_id'); ?>
		<div class="input">
<?php echo Form::select('group_id', Input::post('group_id', isset($role) ? $role->group_id : ''), $select['groups']); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn large primary')); ?>	</div>

<?php echo Form::close(); ?>

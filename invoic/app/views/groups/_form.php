<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Parent id', 'parent_id'); ?>
<?php echo Form::input('parent_id', Input::post('parent_id', isset($group) ? $group->parent_id : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
<?php echo Form::input('name', Input::post('name', isset($group) ? $group->name : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
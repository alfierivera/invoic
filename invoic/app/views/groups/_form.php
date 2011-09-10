<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Parent Group', 'parent_id'); ?>
		<div class='input'>
<?php echo Form::select('parent_id', Input::post('parent_id', isset($group) ? $group->parent_id : ''), $select['groups']); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
		<div class='input'>
<?php echo Form::input('name', Input::post('name', isset($group) ? $group->name : '')); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn primary large')); ?>	</div>

<?php echo Form::close(); ?>

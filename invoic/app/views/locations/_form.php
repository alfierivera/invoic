<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
<?php echo Form::input('name', Input::post('name', isset($location) ? $location->name : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Uri', 'uri'); ?>
<?php echo Form::textarea('uri', Input::post('uri', isset($location) ? $location->uri : ''), array('cols' => 60, 'rows' => 8)); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
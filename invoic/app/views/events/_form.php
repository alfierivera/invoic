<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
		<div class='input'>
<?php echo Form::input('name', Input::post('name', isset($event) ? $event->name : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Starts', 'starts'); ?>
		<div class='input'>
<?php echo Form::input('starts', Input::post('starts', isset($event) ? \Date::factory($event->starts)->format('datepicker') : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Ends', 'ends'); ?>
		<div class='input'>
<?php echo Form::input('ends', Input::post('ends', isset($event) ? \Date::factory($event->ends)->format('datepicker') : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Repeat', 'repeat'); ?>
		<div class='input'>
<?php echo Form::select('repeat', Input::post('repeat', isset($event) ? $event->repeat : ''), $select['repeat']); ?>
</div>
	</p>
	
	<p>
		<?php echo Form::label('Reference', 'reference'); ?>
		<div class='input'>
<?php echo Form::select('reference', Input::post('reference', isset($event) ? $event->reference : ''), $select['references']); ?>
</div>
	</p>
	
	<p>
		<?php echo Form::label('Reference ID', 'ref_id'); ?>
		<div class='input'>
<?php echo Form::input('ref_id', Input::post('ref_id', isset($event) ? $event->ref_id : '')); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn primary large')); ?>	</div>

<?php echo Form::close(); ?>

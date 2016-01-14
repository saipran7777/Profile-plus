@extends('layouts/header')

@section('Content')
	<?php
		$url= url('/addskills');
		if(isset($status))
		{
	?>
		<h3 class='text-center'>Successfully Added!</h3>
		<a href='{!!$url!!}'>Add another one </a>
	<?php
		}
		else
		{
	?>
			<h3 class='text-center'>Please Update Your Skills here</h3>
			{!!Form::open(array('method'=>'POST'))!!}
				{!!Form::label('Category','Skill')!!}
				{!!Form::select('SeCategory', $Skills)!!}
				<h4 class='text-center'>If the skill is not available above, Please add it in here.</h4>
				{!!Form::label('Category','Skill')!!}
				{!!Form::text('Category')!!}
				{!!Form::label('Description')!!}
				{!!Form::text('Description')!!}
				{!!Form::submit('Add Skill')!!}
				{!!csrf_field()!!}
			{!!Form::close()!!}
	<?php
		}
	?>
@endsection
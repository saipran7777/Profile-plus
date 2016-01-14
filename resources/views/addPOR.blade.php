@extends('layouts/header')

@section('Content')
	<?php
		$url= url('/addPOR');
		if(isset($Msg))
		{
	?>
			<h3 class='text-center'>{!!$Msg!!}</h3>
			<a href='{!!$url!!}'>Add another one </a>
	<?php
		}
		else
		{
	?>
			<h3 class='text-center'>Please Add your POR here. </h3>
			{!!Form::open(array('method'=>'POST'))!!}
				{!!Form::label('Category','Position')!!}
				{!!Form::select('SePosition',$PORPosition)!!}
				<h4 class='text-center'>If the Position is not available above, Please add it in here.</h4>
				{!!Form::label('Category','Position')!!}
				{!!Form::text('Position')!!}
				<?php
					echo "<br>";
				?>
				{!!Form::label('SubDepartment')!!}
				{!!Form::select('SeSubDepartment',$PORSubDepartment)!!}
				<h4 class='text-center'>If the SubDepartment is not available above, Please add it in here.</h4>
				{!!Form::label('SubDepartment')!!}
				{!!Form::text('SubDepartment')!!}
				<?php
					echo "<br>";
				?>
				{!!Form::label('Department')!!}
				{!!Form::select('SeDepartment',$PORDepartment)!!}
				<h4 class='text-center'>If the Department is not available above, Please add it in here.</h4>
				{!!Form::label('Department')!!}
				{!!Form::text('Department')!!}
				{!!Form::label('Organisation')!!}
				{!!Form::select('SeOrganisation',$Organisation)!!}
				<h4 class='text-center'>If the Organisation is not available above, Please add it in here.</h4>
				{!!Form::label('Organisation')!!}
				{!!Form::text('Organisation')!!}
				{!!Form::submit('addPOR')!!}
				{!!csrf_field()!!}
			{!!Form::close()!!}
	<?php
		}
	?>
@endsection
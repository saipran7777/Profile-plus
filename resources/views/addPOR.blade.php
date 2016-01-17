@extends('layouts/header')

@section('Content')
<style type="text/css">
#content1{
	z-index: 15;
	top: 150px;
	position: absolute;
	width: 600px;
	height: auto;
	text-align: center;
	color:#308db9;
	background-color: black;
	box-shadow: 3px 3px 13px 2px white;
	
	border-radius: 40px;
	border: 3px black solid;
 
}
</style>
<div class="col-lg-6 col-lg-offset-3" id="content1">
	<?php
		$url= url('/addPOR');
		if(isset($Msg))
		{
	?>
			<h3 >{!!$Msg!!}</h3>
			<a href='{!!$url!!}'>Add another one </a>
	<?php
		}
		else
		{
	?>
			<h2 >Please Add your POR here. </h2>
			{!!Form::open(array('method'=>'POST'))!!}
			<div class="form-group" >
				{!!Form::label('Category','Position')!!}
				{!!Form::select('SePosition',$PORPosition)!!}
			</div>
			<div class="form-group" >
				<h4 >If the Position is not available above, Please add it in here.</h4>
				{!!Form::label('Category','Position')!!}
				{!!Form::text('Position')!!}
				<?php
					echo "<br>";
				?>
			</div>
			<div class="form-group" >
				{!!Form::label('SubDepartment')!!}
				{!!Form::select('SeSubDepartment',$PORSubDepartment)!!}
			</div>
			<div class="form-group" >
				<h4 >If the SubDepartment is not available above, Please add it in here.</h4>
				{!!Form::label('SubDepartment')!!}
				{!!Form::text('SubDepartment')!!}
				<?php
					echo "<br>";
				?>
			</div>
			<div class="form-group" >
				{!!Form::label('Department')!!}
				{!!Form::select('SeDepartment',$PORDepartment)!!}
			</div>
			<div class="form-group" >
				<h4 >If the Department is not available above, Please add it in here.</h4>
				{!!Form::label('Department')!!}
				{!!Form::text('Department')!!}
			</div>
			<div class="form-group" >
				{!!Form::label('Organisation')!!}
				{!!Form::select('SeOrganisation',$Organisation)!!}
			</div>
			<div class="form-group" >
				<h4 >If the Organisation is not available above, Please add it in here.</h4>
				{!!Form::label('Organisation')!!}
				{!!Form::text('Organisation')!!}
			</div>
			<div class="form-group" >
				{!!Form::submit('addPOR')!!}
			</div>
				{!!csrf_field()!!}
			{!!Form::close()!!}
	<?php
		}
	?>
</div>
@endsection
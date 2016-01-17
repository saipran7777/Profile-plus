@extends('layouts/header')
<style type="text/css">
#form{
	background-color:black;
	border-radius: 40px;
	border: 3px black solid;
	color:#308db9;
	opacity: 0.8;
	box-shadow: 3px 3px 13px 6px white;
	position: absolute;
	text-align: center;
	min-height: 200px;
	z-index: 15;
	top: 200px;
}
#submit{
	background-color: #308db9;
	color: white;
}
</style>
@section('Content')
<div id="form" class="col-lg-4 col-lg-offset-4">
	<h2 style="opacity:1;text-shadow: 2px 2px #102e3c;">Welcome to IITM Profile Plus</h2>
	{!! Form::open(array('method'=>'POST')) !!}
	<div class="form-group" >
		{!! Form::label('Username','Username') !!}
		{!! Form::text('Username') !!}
	</div>
	<div class="form-group" >
		{!! Form::label('Password','Password') !!}
		{!! Form::password('Password') !!}
	</div >
		{!! Form::submit('Submit',['id'=>'submit']) !!}
	{!! Form::close() !!}
</div>
@endsection
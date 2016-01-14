@extends('layouts/header')

@section('Content')
	{!! Form::open(array('method'=>'POST')) !!}
		{!! Form::label('Username','Username') !!}
		{!! Form::text('Username') !!}
		{!! Form::label('Password','Password') !!}
		{!! Form::password('Password') !!}
		{!! Form::submit('Submit') !!}
	{!! Form::close() !!}
@endsection
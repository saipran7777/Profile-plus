@extends('layouts/header')

@section('Content')

<h3 class='text-center'>Requests</h3>

<?php
	foreach($pors as $key=>$value)
	{
		if($value=="Nil")
		{
			echo "<h3 class='text-center'>".$key."</h3>";
		}
		else
		{
			
			foreach($value as $key2=>$value2)
			{

			}
		}
	}
?>


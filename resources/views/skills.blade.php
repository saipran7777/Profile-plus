@extends('layouts/header')

@section('Content')
	<h3 class='text-center'>Skills</h3>
	<?php
		$id=1;
		foreach($index as $arr)
		{
			$editurl= url('/skills/edit/'.$arr['id']);
			$deleteurl= url('/skills/delete/'.$arr['id']);
			echo "<h3 class='text-center'>".$id.". ".$arr['Skill']."</h3>";
			echo "<p class='text-center'>".$arr['Description']."</p>";
			echo "<button href='$editurl' class='text-center'>"."Edit"."</button>";
			echo "<button href='$deleteurl' class='text-center'>"."Delete"."</button>";
			$id++;
		}
	?>
@endsection
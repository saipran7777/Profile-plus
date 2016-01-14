@extends('layouts/header')

@section('Content')
	<h3 class='text-center'>Approved PORs</h3>
	<?php
		$id=1;
		foreach($pors as $arr)
		{
			if($arr['Status'])
			{
				$deleteurl= url('/PORs/delete/'.$arr['id']);
				echo "<h3 class='text-center'>".$id.". ".$arr['Position']."</h3>";
				echo "<p class='text-center'>".$arr['SubDepartment']."</p>";
				echo "<p class='text-center'>".$arr['Department']."</p>";
				echo "<p class='text-center'>".$arr['Orgsnisation']."</p>";
				//echo "<button href='$editurl' class='text-center'>"."Edit"."</button>";
				//echo "<button href='$deleteurl' class='text-center'>"."Delete"."</button>";
				$id++;
			}
		}
	?>
	<h3 class='text-center'>Pending Approvals</h3>
	<?php
		$id=1;
		foreach($pors as $arr)
		{
			if(!$arr['Status'])
			{
				$deleteurl= url('/PORs/delete/'.$arr['id']);
				echo "<h3 class='text-center'>".$id.". ".$arr['Position']."</h3>";
				echo "<p class='text-center'>".$arr['SubDepartment']."</p>";
				echo "<p class='text-center'>".$arr['Department']."</p>";
				echo "<p class='text-center'>".$arr['Orgsnisation']."</p>";
				//echo "<button href='$editurl' class='text-center'>"."Edit"."</button>";
				//echo "<button href='$deleteurl' class='text-center'>"."Delete"."</button>";
				$id++;
			}
		}
	?>
@endsection
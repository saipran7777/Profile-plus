@extends('layouts/header')

@section('Content')
<style type="text/css">
#content{
	z-index: 15;
	top: 100px;
	position: absolute;
	width: 100%;
 
}
</style>
<div class="container-fluid" id="content">
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
</div>
@endsection
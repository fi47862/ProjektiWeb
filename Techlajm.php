<?php

    header('Content-Type: text/html; charset=ISO-8859-1');
require 'dbh.php';

$stmt = $dbh->prepare("SELECT ID FROM lajmet");
$stmt->execute();
$lajmi = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
	<head><title> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
	<style>	

	*{
		margin: 50px auto;
		font-family:sans-serif;
		color: white;
		text-align: center;
	}
	body{
		background-color:#053964;
	}
	.i1{
		border-style: solid;
		border-color: white;
		opacity: 0.8;
		margin: auto 100px auto 100px;
		font-size: 25px;
		padding: 23px;
		background-color: #27313a;

	}
	#vija{
	border-bottom-style: solid;
	border-bottom-color: white;
	}
	
	</style>
	<body>
		<p>
		<h1 id="vija">
			LAJMET E FUNDIT NE KUADRIN E TEKNOLOGJISE
		</h1>
		</p>
		<div>
		<h1>
			5G is finally here. This is what you need to know
		</h1>
		<p class="i1">
		<?php 
		foreach($lajmi as $lajm){
			if($lajm['ID'] == "lajmi5g.txt"){
				include('lajmet/lajmi5g.txt');
}
}
?>
		</p>

		<h1>
			Radeon RX 6900 XT Review: AMD's Most Powerful GPU Ever
		</h1>
		<p class="i1">
		<?php 
				
		foreach($lajmi as $lajm){
			if($lajm['ID'] == "lajmiamd.txt"){
include('lajmet/lajmiamd.txt'); 
}
		}
?>
				
		</p>

		<h1>
			Google's fight in one country could threaten its global media empire
		</h1>
		<p class="i1">
		<?php 
				
		foreach($lajmi as $lajm){
			if($lajm['ID'] == "lajmigoogle.txt"){
		 include('lajmet/lajmigoogle.txt'); 
}
}
?>

		</p>

		<h1>
			Google, Microsoft and Qualcomm want regulators to halt Nvidia's Arm deal, report says
		</h1>
		<p class="i1">
		<?php 
		foreach($lajmi as $lajm){
			if($lajm['ID'] == "lajmigoogle2.txt"){
		 include('lajmet/lajmigoogle2.txt');
}
}
?>
		</p>
		</div>

		<a href = "index.php">BACK</a>
	</body>
</html>

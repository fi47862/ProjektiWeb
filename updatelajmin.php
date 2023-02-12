<?php
require 'dbh.php';
$input = $_FILES['file']['name'];
	$dir = "lajmet/";
$inputfile = fopen($dir.$input,"r");
	$id = $_POST['id_lajmi'];
	$file = fopen($dir.$id,"w");
	while(!feof($inputfile)){
		$text = fgets($inputfile);
	fwrite($file,$text);
}
fclose($file);
fclose($inputfile);

header("Location: Dashboardlajmet.php");

?>
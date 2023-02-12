<?php
	require 'dbh.php';
if(isset($_POST['submit'])){
	$user_id = $_POST['user_id'];
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$mosha = $_POST['mosha'];
	$llojiiuserit = $_POST['llojiiuserit'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	try{
$sql = "update users set user_id=$user_id, emri='$emri', mbiemri='$mbiemri', mosha=$mosha, email='$email',fjalekalimi='$password',llojiiuserit=$llojiiuserit where user_id=$user_id";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	header("Location: Dashboard.php");
	}
	catch(Exception $e){
	
	}
	}
	
?>

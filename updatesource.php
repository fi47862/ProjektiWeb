<?php
	require 'dbh.php';
if(isset($_POST['submit'])){
	$user_id = $_GET['id'];
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$mosha = $_POST['mosha'];
	$email = $_POST['email'];

$sql = "update users set user_id=$user_id, emri=$emri, mbiemri=$mbiemri, mosha=$mosha, email=$email";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	header("Location: Dashboard.php");
}
?>
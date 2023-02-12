<?php
require 'dbh.php';
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE user_id = $id";
$stmt = $dbh->prepare($sql);
$stmt->execute();
header('Location: Dashboard.php');
?>
<?php
require 'dbh.php';
$id = $_GET['id'];
$sql = "DELETE FROM images WHERE id = $id";
$stmt = $dbh->prepare($sql);
$stmt->execute();
header('Location: Dashboardfotot.php');
?>

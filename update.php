<?php
  require 'dbh.php';

  if (isset($_POST['submit'])) {
    $id = $_POST['id_lajmi'];
    $file_name = $_POST['emri'];
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($file_tmp, "uploads/$file");

    $sql = "UPDATE images SET file_name=?, file=? WHERE id=?";
    $stmt = $dbh->
  }
  ?>
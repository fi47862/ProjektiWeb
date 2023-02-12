<?php
	require 'dbh.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM images WHERE id=$id";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$foto = $stmt->fetch();
	$file_name = $foto['file_name'];
	$uploaded_on = $foto['uploaded_on'];
	$status = $foto['status'];

?>

<!DOCTYPE html>
<html>
	<head><title>Update</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
<link rel="stylesheet" type="text/css" href="style.css">

<style>
#nemesupdate{
       text-align: center;
margin: 30px auto;
}
</style>
	</head>

	<body>
		<header>
		<h1 id="nemesupdate">
		UPDATE FOTO
		</h1>

		</header>
		<div id="pjesasiper">
		</div>
		<div id="error">
		</div>
		<div id="formatimi">
		<div id="innerform">

<?php echo $file_name;?>
<?php echo $uploaded_on;?>
<?php echo $status;?>			
<?php echo $id;?>


<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="shtyrjeteinputit">
	<input id="id_lajmi" name="id_lajmi" type="number" placeholder="id_lajmi" class="inputheight" value="<?php echo $id;?>" readonly>
</div>

<div class="shtyrjeteinputit">
	<input id="emri" name="emri" type="text" placeholder="emri" style="color: black; height: 25px; width: 200px;" >
</div>

<input type="file" name="file" id="file">

<input type="submit" name="submit" value="Upload">

	</div>
</div>

</body>
</html>
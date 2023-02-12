<?php
	require 'dbh.php';
	$id = $_GET['id'];
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



			
<?php echo $id;?>



<form action="updatelajmin.php" method="post" enctype="multipart/form-data">
			<div class="shtyrjeteinputit">

<input type="file" name="file" id="file">
</div>

<?php echo $id; ?>

	<div class="shtyrjeteinputit">
<input id="id_lajmi" name="id_lajmi" type="text" placeholder="id_lajmi" style="color: black; height: 25px; width: 300px;" value="<?php echo $id ?>">
			</div>

   <input type="submit" name="submit" value="Upload">
	</div>
</form>

	</div>
	<footer>
</footer>

</body>
</html>
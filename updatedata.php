<?php

require 'dbh.php';
$id;
$emri;
$mbiemri;
$mosha;
$llojiiuserit;
$email;
$password;
$user_id;
try{
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE user_id=$id";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$user = $stmt->fetch();
	$user_id = $user['user_id'];
	$emri = $user['emri'];
	$mbiemri = $user['mbiemri'];
	$mosha = $user['mosha'];
	$llojiiuserit = $user['llojiiuserit'];
	$email = $user['email'];
	$password = $user['fjalekalimi'];
	}
	catch(Exception $e){
	
	}	
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
		UPDATE USER
		</h1>
		</header>
		<div id="pjesasiper">
		
		</div>
		<div id="error">
		</div>
		<div id="formatimi">
			<div id="innerform">
<form id="form" action="updatedatafile2.php" onsubmit="return fpervalidim()" method="post">
			<div class="shtyrjeteinputit">
<input id="emri"name="emri" type="text" placeholder="emri" class="inputheight" 
value="<?php echo $emri;?>">
			</div>
			<div class="shtyrjeteinputit">
<input id="mbiemri" name="mbiemri" type="text" placeholder="mbiemri" class="inputheight"
value="<?php echo $mbiemri;?>">
			</div>
			<div class="shtyrjeteinputit">
<input id="email" name="email" type="email" placeholder="email" class="inputheight"
value="<?php echo $email;?>">
			</div>
	<div class="shtyrjeteinputit">
	<input id="password" name="password" type="text" placeholder="password" class="inputheight" value="<?php echo $password;?>">
			</div>
			<div class="shtyrjeteinputit">
<input id="mosha" name="mosha" type="number" placeholder="mosha" class="inputheight"
value="<?php echo $mosha;?>">
</div>



			<div class="shtyrjeteinputit">
<input id="llojiiuserit" name="llojiiuserit" type="number" placeholder="llojiiuserit" class="inputheight" value="<?php echo $llojiiuserit;?>">
			</div>



			<div class="shtyrjeteinputit">
<input id="user_id" name="user_id" type="user_id" placeholder="user_id" class="inputheight" value="<?php echo $user_id;?>">
			</div>



<input value="submit"id="submit" type="submit" placeholder="Submit" class="inputheight" name="submit">
			</div>
			</form>
			</div>
	<footer>
		</footer>

	</body>
</html>

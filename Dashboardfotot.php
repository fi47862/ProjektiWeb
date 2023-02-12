<?php
session_start();
?>

<html>
<head>
	<title>Dashboard</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="style.css">
<style> 
	*{
	font-family: sans-serif;
	color: white;
	text-align: center;

}
body{
	background-color: #053964;

}
.nemes{
	text-align: center;
	

}
th,td{
	text-align: center;
	margin: 0px auto;
	padding: 8px 70px;
	border: 1px solid white;
}

table{
	margin: 0px auto;
}

.Ngjyra{
	color: red;
	font-weight: bold;
}
.Ngjyra2{
	color: blue;
	font-weight: bold;
}
.perupload{
	padding-bottom: 50px;
	padding-top: 10px;
	margin: 20px auto ;
	text-align: center;
}
.shtyrjeteinputit{
	margin: 20px;
	text-align: center;
	color: black;
}
</style>
</head>
<body>
	<header>
		<div class="header">
			<div class="inner-header">
			<div class="logo-container">
<a href="Dashboard.php"><h1>DASHBOARD</h1></a>
			</div>
			<ul class="navigation">
		<a href="Dashboardfotot.php"><li>Fotot</li></a>
	<a href="Dashboardlajmet.php"><li>Lajmet</li></a>
			<a href="Login.php"><li>Logout</li></a>
			</ul>
			</div>
		</div>
		</header>
		<div>
		<p id="tekstidatabaze">
		Lista e fotove
		</p>
			<p id="testimtekst">
		<div class="nemes">
		<table>
		<thead>
		<tr>
		<th>ID</th>
		<th>Emri i file-it</th>
		<th>Uploaded_on </th>
		<th>Uploaded_by</th>
		<th>Status</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>
		</thead>
		<tbody>
	<?php 
require 'dbh.php';
$stmt = $dbh->prepare("SELECT * FROM images");
$stmt->execute();
	while($foto = $stmt->fetch()){
?>
		<tr>
		<td> <?php echo $foto['id']; ?> </td>
		<td> <?php echo $foto['file_name']; ?></td>
		<td> <?php echo $foto['uploaded_on']; ?></td>
		<td> <?php echo $foto['uploaded_by']; ?></td>
		<td> <?php echo $foto['status']; ?></td>
		<td><button class="perbuton">
	<a href="deletefotot.php?id=<?php echo $foto['id']; ?>"class="Ngjyra">Delete</a>
		</button></td>

		<td><button class="perbuton">
<a href="updatedatafotot.php?id=<?php echo $foto['id']; ?>"class="Ngjyra2">Update</a>
		</button></td>
		</tr>
		</tbody>
		<?php 
	}
?>
		</table>


</p>

<div class="perupload">
<h1>
UPLOAD FOTO
</h1>
<form action="uploadfoto.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" style="font-weight: bold;">
    <input type="submit" name="submit" value="upload" style="color:black; padding: 2px; font-weight: bold;">
		<div class="shtyrjeteinputit">
<input id="emri" name="emri" type="text" placeholder="emri" style="color: black; height: 25px; width: 300px;" >
			</div>

</form>
</div>


	
</body>
</html>
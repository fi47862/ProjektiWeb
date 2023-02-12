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
		Lajmet
		</p>
			<p id="testimtekst">
		<div class="nemes">
		<table>
		<thead>
		<tr>
		<th>ID_LAJMI</th>
		<th>Uploaded_by</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>
		</thead>
		<tbody>
	<?php 
require 'dbh.php';
$stmt = $dbh->prepare("SELECT * FROM lajmet");
$stmt->execute();

	while($lajmi = $stmt->fetch()){
?>
		<tr>
		<td><?php echo $lajmi['ID']; ?> </td>
		<td><?php echo $lajmi['uploaded_by']; ?> </td>
		<td><button class="perbuton">
	<a href="deletelajmet.php?id=<?php echo $lajmi['ID']; ?>"class="Ngjyra">Delete</a>
		</button></td>

		<td><button class="perbuton">
<a href="updatedatalajmet.php?id=<?php echo $lajmi['ID']; ?>"class="Ngjyra2">Update</a>
		</button></td>
		</tr>
		</tbody>
		<?php 
	}
?>
		</table>
		<div>
</p>

	
</div>
</body>
</html>

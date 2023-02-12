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
		Lista e studenteve te universitetit
		</p>
			<p id="testimtekst">
		<div class="nemes">
		<table>
		<thead>
		<tr>
		<th>User_id</th>
		<th>Emri </th>
		<th>Mbiemri </th>
		<th>Mosha</th>
		<th>Llojiiuserit</th>


		<th>Email</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>
		</thead>
		<tbody>
	<?php 
require 'dbh.php';
$stmt = $dbh->prepare("SELECT * FROM users");
$stmt->execute();
	while($user = $stmt->fetch()){
?>
		<tr>
		<td><?php echo $user['user_id']; ?> </td>
		<td> <?php echo $user['emri']; ?></td>
		<td> <?php echo $user['mbiemri']; ?></td>
		<td> <?php echo $user['mosha']; ?></td>
		<td> <?php echo $user['llojiiuserit']; ?></td>
		<td> <?php echo $user['email']; ?></td>
		<td>
<button class="perbuton">
	<a href="delete.php?id=<?php echo $user['user_id']; ?>"class="Ngjyra">Delete</a>
		</button>
</td>

		<td><button class="perbuton">
<a href="updatedata.php?id=<?php echo $user['user_id']; ?>"class="Ngjyra2">Update</a>
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

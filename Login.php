<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php 
require 'dbh.php';
try{

$stmt = $dbh->prepare("SELECT * FROM images");
$stmt->execute();
$fotos = $stmt->fetchAll();

		$f1="";$f2="";$f3="";$f4="";$f5="";$f6="";
		foreach($fotos as $foto)
		if($foto["id"] == 18){
		$f1 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 16){
		$f2 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 17){
		$f3 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 21){
		$f4 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 19){
		$f5 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 20){
		$f6 = 'uploads/'.$foto["file_name"];
		}

	}catch(Exception $e){
		echo "Foto nuk eshte marre me sukses nga databaza!!!";
			}
	?>
<!DOCTYPE html>
<html>
	<head><title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	function fpervalidim(){
	const password = document.getElementById('password2');
	const email = document.getElementById("email2");
	const form = document.getElementById('form2');
		
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if(email.value.match(mailformat)){
}
else{
alert("Email-a e shtypur nuk i permbush kushtet!");
return false;
}

const passkushtet = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
if(password.value.match(passkushtet)){
}
else{
		alert("Fjalekalimi i shtypur nuk i permbush kushtet!\n"
		+ "-Duhet te kete shkronje te vogel\n"
		+ "-Duhet te kete shkronje te madhe\n"
		+ "-Duhet te kete shifer numerike\n"
		+ "-Duhet te kete 8 karaktere minimum");
		return false;
	}
}
</script>

	</head>

	<body>
	<header>
		<div class="header">
			<div class="inner-header">
			<div class="logo-container">
<a href="index.php"><h1>UNIVERSITETI</h1></a>
			</div>
			<ul class="navigation">
			<a href="RrethUni.php"><li>Rreth Universitetit</li></a>
			<a href="Hulumtimet.php"><li>Hulumtimet</li></a>
		<a href="Regjistrohupage.php"><li>Regjistrohu</li></a>
			<a href="Login.php"><li>Login</li></a>
			</ul>
			</div>
		</div>
		</header>
		<div id="pjesasiper2">
		
		</div>
		<div id="error">
		</div>
		<div id="formatimi2">
			<div id="innerform2">
<form action="loginvalidim.php" onsubmit=" return fpervalidim()" method="post" id="form2">
			<div class="shtyrjeteinputit2">
<input id="email2" name="email" type="text" placeholder="email" class="inputheight">
			</div>
	<div class="shtyrjeteinputit2">
<input id="password2" name="password" type="password" placeholder="password" class="inputheight">
			</div>
<input value="login"id="login" type="submit" placeholder="Login" class="inputheight" name="submit">
			</div>
			</form>
			</div>
			</div>
	<footer id="loginshtyje">
	<div id="perfooter">
		<div class="perH2"><p><h2>KONTAKTO NE </h2></p></div>
<div><p class="permadhesi"><img src="<?php echo $f1 ?>" height="35" width="35" id="perNumerFoto"> +383 45 xxx xxx</p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f2 ?>" height="35" width="35" id="perNumerFoto"><span id="shtyje"> info@universiteti.net</span></p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f3 ?>" id="fbposht"height="42" width="42"><span class="spanlogo"><img src="<?php echo $f4 ?>" height="35" width="35"></span><img src="<?php echo $f5 ?>" id="ytposht"height="52" width="52">
	<div class="copyrighttotal"><p><img src="<?php echo $f6 ?>" height="25" width="25" id="copyright">2022 UNIVERSITETI</p></div>
		</div>
		
		</footer>


			</body>
			</html>


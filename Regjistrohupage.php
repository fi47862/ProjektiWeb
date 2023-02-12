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
	<head><title>Regjistrohu </title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
<link rel="stylesheet" type="text/css" href="style.css">
<script>
	function fpervalidim(){
	const emri = document.getElementById('emri');
	const mbiemri = document.getElementById('mbiemri');
	const password = document.getElementById('password');
	const email = document.getElementById("email");
	const mosha = document.getElementById("mosha");
    	var regex = /^[a-zA-Z]{3,30}$/;

	if(emri.value.match(regex)){
}

else{
		alert("Emri i shtypur nuk e permbush kushtin!\n"
			+"Per validim duhet te kete minimun 3 karaktere");
		return false;

	}
	if(mbiemri.value.match(regex)){
	}
	else{

		alert("Mbiemri i shtypur nuk e permbush kushtin!\n"
			+"Per validim duhet te kete minimun 3 karaktere");
		return false;
	}

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

	if(mosha.value < 16 || mosha.value == ''){
		alert("Mosha e shtypur nuk eshte valide!"
		+"-Duhet te jete 16+");
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
		<div id="pjesasiper">
		
		</div>
		<div id="error">
		</div>
		<div id="formatimi">
			<div id="innerform">
<form id="form" onsubmit="return fpervalidim()" action="regjistrohu.php" method="post">
			<div class="shtyrjeteinputit">
<input id="emri"name="emri" type="text" placeholder="emri" class="inputheight">
			</div>
			<div class="shtyrjeteinputit">
<input id="mbiemri" name="mbiemri" type="text" placeholder="mbiemri" class="inputheight">
			</div>
			<div class="shtyrjeteinputit">
<input id="email" name="email" type="email" placeholder="email" class="inputheight">
			</div>
	<div class="shtyrjeteinputit">
<input id="password" name="password" type="text" placeholder="password" class="inputheight">
			</div>
			<div class="shtyrjeteinputit">
<input id="mosha" name="mosha" type="number" placeholder="mosha" class="inputheight">
			</div>
<input value="submit"id="submit" type="submit" placeholder="Submit" class="inputheight" name="submit">

			</div>
			</form>
			<div id="LOGINID">
				<p id="pshtyje">PARAPRAKISHT I REGJISTRUAR ? </p>
			<a href="Login.php" id="colorlogin">LOGIN</a>
			</div>
			</div>
	<footer>

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

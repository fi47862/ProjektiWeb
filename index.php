<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php 
require 'dbh.php';
try{

$stmt = $dbh->prepare("SELECT * FROM images");
$stmt->execute();
$fotos = $stmt->fetchAll();

	$f1="";$f2="";$f3="";$f4="";$f5="";$f6="";$f7="";$f8="";$f9="";$f10="";$f11="";$f12="";
		foreach($fotos as $foto)
		if($foto["id"] == 11){
		$f1 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 15){
		$f2 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 13){
		$f3 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 14){
		$f4 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 9){
		$f5 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 12){
		$f6 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 18){
		$f7 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 16){
		$f8 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 17){
		$f9 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 21){
		$f10 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 19){
		$f11 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 20){
		$f12 = 'uploads/'.$foto["file_name"];
		}
		
}catch(Exception $e){
	echo "Foto nuk eshte marre me sukses nga databaza!!!";
		}
?>
<!DOCTYPE html>
<html>
	<head><title>Universiteti</title>
<link rel="stylesheet" type="text/css" href="stylemain.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
		<div class="ngjyra">
		<div class="perLogo">
		<img src="<?php echo $f1 ?>"/>
		</div>
		</div>



		<p class="PerLajmet">LAJMET E FUNDIT</p>
	<div class="perpermirsim">
    <div class="wrapper">
    <div class="slides-container">
    <div class="slide-image">

<a href="Techlajm.php"><img src="<?php echo $f2; ?>" alt="" / class="sizefoto"></a>
        </div>

        <div class="slide-image">
<a href="Techlajm.php"><img src="<?php echo $f3?>" alt="" / class="sizefoto"></a>
        </div>

        <div class="slide-image">
<a href="Techlajm.php"><img src="<?php echo $f4?>" alt="" / class="sizefoto"></a>
        </div>
      </div>
    </div>

    <div class="navigation-dots"></div>

<p class="PerTekst">TEKNOLOGJI</p>
	
    <script src="main.js"></script>



		<div id="krejtCenter">

<p class="BoxP"><a href=""><img src="<?php echo $f5 ?>" class="img"></a></p>
		<p class="PerTekst">SHKENCA NATYRORE</p>
	<p class="BoxP"><a href=""><img src="<?php echo $f6 ?>" class="img"></a></p>
		<p class="PerTekst">SHKENCA SOCIO-PSIKOLOGJIKE</p>

		</div>
		<footer>
			<div id="perfooter">
		<div class="perH2"><p><h2>KONTAKTO NE </h2></p></div>
<div><p class="permadhesi"><img src="<?php echo $f7 ?>" height="35" width="35" id="perNumerFoto"> +383 45 xxx xxx</p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f8 ?>" height="35" width="35" id="perNumerFoto"><span id="shtyje"> info@universiteti.net</span></p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f9 ?>" id="fbposht"height="42" width="42"><span class="spanlogo"><img src="<?php echo $f10 ?>" height="35" width="35"></span><img src="<?php echo $f11 ?>" id="ytposht"height="52" width="52">
	<div class="copyrighttotal"><p><img src="<?php echo $f12 ?>" height="25" width="25" id="copyright">2022 UNIVERSITETI</p></div>
		</div>
		
		</footer>
	</body>
</html>
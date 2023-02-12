<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php 
require 'dbh.php';
try{

$stmt = $dbh->prepare("SELECT * FROM images");
$stmt->execute();
$fotos = $stmt->fetchAll();

		$f1="";$f2="";$f3="";$f4="";$f5="";$f6="";$f7="";$f8="";$f9="";
		foreach($fotos as $foto)
		if($foto["id"] == 2){
		$f1 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 3){
		$f2 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 4){
		$f3 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 18){
		$f4 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 16){
		$f5 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 17){
		$f6 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 21){
		$f7 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 19){
		$f8 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 20){
		$f9 = 'uploads/'.$foto["file_name"];
		}
		
}catch(Exception $e){
	echo "Foto nuk eshte marre me sukses nga databaza!!!";
		}
?>
<!DOCTYPE html>
<html>
	<head><title> Rreth Universitetit</title>
 <meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
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
		<div id="ngjyrabardh">
		<div id="fillimiRrethUni">
		<h1 id="boxRrethUni">RRETH UNIVERSITETIT</h1>
		<div id="gjeresiaTekHapsira">
		<h3 id="boxHapsira">VENDI I ABSORBIMIT TE DIJES</h3>
		</div>
		</div>
		</div>
		<div>
		<img src="<?php echo $f1; ?>" height="740" width="100%">
		</div>
		<div id="RrethUniTekst">
			
			Ne univeristetin tone qellimi kryesor eshte rritja e nivelit te mundesive per inovacion ne te gjitha drejtimet 
			shkencore te ofruara. Teknologjia e perdorur eshte ne nivelet me te larta te sofistikimit. Stafi yne eshte i perbere nga pjestar 
			te inovacioneve ne subjekte te ndryshme nga e gjithe bota, duke mundesuar diversitet ne metodologjite shkencore qe ofrojme. 
			Fillet e institutit tone fillojne qe nga viti 1990. Gjate gjithe kesaj kohe kemi percjellur gjenerate pas gjenerate me te vetmin 
			qellim qe ata te krijojne nje te ardhme sa me te mir per ne dhe per veten e tyre. Per qellim kemi rritjen e kualitetit arsimor dhe 
			thurrjen e lidhjeve ne mes studenteve qe per qellim kan suksesin, diqka qe mund te arrijne per sa kohe qe studiojne 
			ne universitetin tone. 

		</div>
		<div id="perstatistika">
		<div class="distancaNeKontent">

<h3 class="tekstnemes">
	VITI I HAPJES : 1990
</h3>
<br/>
<h3 class="tekstnemes">
	LOKACIONI: PRISHTINE
</h3>
</div>
		</div>
		<div id="dyfotot">
<p>
<img src="<?php echo $f2; ?>" height="500" width="755" id="jasht">
<img src="<?php echo $f3; ?>" height="500" width="755" id="oborr">
</p>
		</div>
		<h1 id="drejtimeteofruara">DREJTIMET E OFRUARA</h1>
		<div id="drejtimet">
			<div id="elemlist">
			<ul>
				<p><li>SHKENCA KOMPJUTERIKE</li></p>
				<p><li>SHKENCA POLITIKE</li></p>
				<p><li>PSIKOLOGJI</li></p>
				<p><li>SOCIOLOGJI</li></p>
				<p><li>FIZIKE</li></p>
				<p><li>KIMI</li></p>
				<p><li>BIOLOGJI</li></p>
				<p><li>MJEKESI</li></p>
			</ul>
			</div>

		</div>
		<footer>
			<div id="perfooter">
			<div class="perH2"><p><h2>KONTAKTO NE </h2></p></div>
<div><p class="permadhesi"><img src="<?php echo $f4 ?>" height="35" width="35" id="perNumerFoto"> +383 45 xxx xxx</p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f5 ?>" height="35" width="35" id="perNumerFoto"><span id="shtyje"> info@universiteti.net</span></p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f6 ?>" id="fbposht"height="42" width="42"><span class="spanlogo"><img src="<?php echo $f7 ?>" height="35" width="35"></span><img src="<?php echo $f8 ?>" id="ytposht"height="52" width="52">
	<div class="copyrighttotal"><p><img src="<?php echo $f9 ?>" height="25" width="25" id="copyright">2022 UNIVERSITETI</p></div>
		</div>
		
		</footer>



	</body>
</html>

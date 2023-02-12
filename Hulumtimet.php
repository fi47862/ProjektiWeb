<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php 
require 'dbh.php';
try{

$stmt = $dbh->prepare("SELECT * FROM images");
$stmt->execute();
$fotos = $stmt->fetchAll();

		$f1="";$f2="";$f3="";$f4="";$f5="";$f6="";$f7="";$f8="";$f9="";$f10="";$f11="";
		foreach($fotos as $foto)
		if($foto["id"] == 1){
		$f1 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 5){
		$f2 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 7){
		$f3 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 6){
		$f4 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 8){
		$f5 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 18){
		$f6 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 16){
		$f7 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 17){
		$f8 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 21){
		$f9 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 19){
		$f10 = 'uploads/'.$foto["file_name"];
		}
		else if($foto["id"] == 20){
		$f11 = 'uploads/'.$foto["file_name"];
		}
		
}catch(Exception $e){
	echo "Foto nuk eshte marre me sukses nga databaza!!!";
		}
?>

<!DOCTYPE html>
<html>
	<head><title> Rreth Universitetit</title>
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
		<div id="ngjyrabardh2">
		<div id="fillimiHulumtimet">
		<h2 id="boxHulumtimet">  NE UNIVERSITETIN TONE SHTYRJA E KUFIJEVE TE NJOHURISE DUKE ZBATUAR APLIKIM PRAKTIK TE VAZHDUESHEM TE TEORISE SE OFRUAR ESHTE OBSESION QE REZULTON NE NIVEL TE LARTE TE EFIKASITETIT</h2>
		<div id="gjeresiaTekHapsira2">
			<h3 id="boxHapsira2">MESO DUKE BERE</h3>
		</div>
		</div>
		</div>
		<div class="vendosnemes">
		<h1>Bio-inxhinieri</h1>
		<p class="rregullotekstin">
		     Hulumtimet ne Crispr: Hulumtime keto qe kryhen nga studente te cilet deshirojne te kryejne vitet e tyre te doktoratures ne institutin tone. 
		     Metode e nivelit me te larte te manipulimit te gjeneve me ane inxhinierise gjenetike, ekskluzive vetem brenda instituteve tona. 
		</p>
		</div>
		<div class="vendosjenemes">
		<img src="<?php echo $f1; ?>" class="fotoheightwidth">
		</div>


		<div class="vendosnemes">
		<h1>Medicine</h1>
		<p class="rregullotekstin">

		     Hulumtimet rreth kurave te mundshme: institutet tona ofrojne laboratore te pershtatshme per testimin e ideve te studenteve aspirues ne 
		     krijimin e kurave te reja me ane te mbikqyrjes nga profesoret kujdestare. Nje nga me te cituarat eshte mundesia qe te zbulojme 
		     kuren kunder kancerit me ane te gjetjes se metodes per targetimin e proteinave specifike ne trupin e peshqve, ashtu qe te sherbej 
		     si test qe na ndihmon per targetimin e qelizave kancerogjene ne kemoterapi. 

		</p>
		</div>
		<div class="vendosjenemes">
		<img src=<?php echo $f2; ?> class="fotoheightwidth">
		</div>

	<div class="vendosnemes">
		<h1>Psikologji</h1>
		<p class="rregullotekstin">

		     Hulumtim rreth krijimit te institutit ideal per studente aspirues: Ky hulumtim ka per qellim krahasimin e gjendjes emocionale, 
		     arritjeve dhe aftesite lidhese ne mes te studenteve, ashtu qe te determinojme se efare eshte ambienti ideal qe studentet te mund te 
		     shprehin potencialin e tyre maksimal. Qellimi i hulumtimit eshte qe studentet te ken benefit, ashtu qe edhe kur ballafaqohen me 
		     stres te larte, te mund te japin me te miren dhe te gjenje zgjidhje adekuate per problemet qe i rrethojne. 

		</p>
		</div>
		<div class="vendosjenemes">
		<img src="<?php echo $f3; ?>" class="fotoheightwidth">
		</div>

	<div class="vendosnemes">
		<h1>Simulator Politik</h1>
		<p class="rregullotekstin">

	 	     Ky program ka per qellim lehtesimin e zgjedhjes se karrieres politike adekuate per studentet qe aspironjne ne kete drejtim. 
	 	     Kjo ndihmon ne lindjen e politikanveve te afte ne diplomaci te jashtme dhe ne lindjen e lidereve mendjendritur! 

		</p>
		</div>
		<div class="vendosjenemes">
		<img src="<?php echo $f4; ?>" class="fotoheightwidth">
		</div>

	<div class="vendosnemes">
		<h1>  Kampi Veror rreth Robotikes  </h1>
		<p class="rregullotekstin">
			
		     Ky program ofroi trajnime falas per studentet e institutit tone rreth ndertimit, programimit dhe aktivizimit 
			 te roboteve ne menyre efiqente brenda nje kohe prej 2 muajsh ashtu qe studentet e interesuar te kene kohe te absorbojne ato 
			 qe kane mesuar dhe te thellojne ato aftesi ne nivel profesional. 

		</p>
		</div>
		<div class="vendosjenemes">
		<img src="<?php echo $f5; ?>" class="fotoheightwidth">
		</div>


	
		<footer>
		<div id="perfooter2">
		<div class="perH2"><p><h2>KONTAKTO NE </h2></p></div>
<div><p class="permadhesi"><img src="<?php echo $f6 ?>" height="35" width="35" id="perNumerFoto"> +383 45 xxx xxx</p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f7 ?>" height="35" width="35" id="perNumerFoto"><span id="shtyje"> info@universiteti.net</span></p></div>
<div class="distance"><p class="permadhesi"><img src="<?php echo $f8 ?>" id="fbposht"height="42" width="42"><span class="spanlogo"><img src="<?php echo $f9 ?>" height="35" width="35"></span><img src="<?php echo $f10 ?>" id="ytposht"height="52" width="52">
	<div class="copyrighttotal"><p><img src="<?php echo $f11 ?>" height="25" width="25" id="copyright">2022 UNIVERSITETI</p></div>
		</div>
	</body>
</html>
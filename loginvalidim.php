<?php
session_start();
require 'dbh.php';
	if(isset($_POST['submit'])){
	$login = new loginvalidim($_POST);
	$stmt = $dbh->prepare("SELECT * FROM users");
	$stmt->execute();
	$users = $stmt->fetchAll();
	$c = $login->kontrollouserat($users);
	$login->persession();
if($c == 0){
		header("Location: Login.php");
	}
	}
class loginvalidim{
	private $email = "";
	private $password = "";

	public function __construct($tedhenat){
		$this->email = $tedhenat['email'];
		$this->password = $tedhenat['password'];

	}
	public function persession(){
		$_SESSION["email"] = $this->email;
	}
	public function kontrollouserat($users2){
		$c = 0;
	foreach($users2 as $user){
if($user['email'] == $this->email && $user['fjalekalimi'] == $this->password && $user['llojiiuserit'] == 0){
		header("Location: Home.php");	
		$c++;
		$emri = $user['emri'];
		$mbiemri = $user['mbiemri'];
		$value = $emri.' '.$mbiemri;
		$_SESSION["emrimbiemri"] = $value;
	setcookie("user",$value,time()+86400,"/");
}
else if($user['email'] == $this->email && $user['fjalekalimi'] == $this->password && $user['llojiiuserit'] == 1){
	header("Location: Dashboard.php");
	$c++;
		$emri = $user['emri'];
		$mbiemri = $user['mbiemri'];
		$value = $emri.' '.$mbiemri;
	setcookie("user",$value,time()+86400,"/");
}
	}
	return $c;
	}
}


?>

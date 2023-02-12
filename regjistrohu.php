<?php
if(isset($_POST['submit'])){
	$regj = new regjistrohu($_POST);
	$regj->kontrollotedhenatempty();
	$regj->kontrollotedhenat();
}
class regjistrohu{
	private $emri;
	private $mbiemri;
	private $email;
	private $password;
	private $mosha;

	public function __construct($tedhenat){
		$this->emri = $tedhenat['emri'];
		$this->mbiemri = $tedhenat['mbiemri'];
		$this->email = $tedhenat['email'];
		$this->password = $tedhenat['password'];
		$this->mosha = $tedhenat['mosha'];
	}
	public function kontrollotedhenatempty(){

	if(empty($this->emri)||empty($this->mbiemri)||empty($this->email)||empty($this->password)
	||empty($this->mosha)){
	header("Location: Regjistrohu.html");
	}
	}

	public function merrtedhenat(){
	require 'dbh.php';
	$stmt = $dbh->prepare("SELECT * FROM users");
	$stmt->execute();
	$users = $stmt->fetchAll();
	return $users;
	}

	public function kontrollotedhenat(){
	$users = $this->merrtedhenat();
	require 'dbh.php';
	$count = 0;
	foreach($users as $user){
	try{
	if($this->emri == $user['emri'] && $this->mbiemri == $user['mbiemri']&& $this->email == $user['email']){
		header("Location: Regjistrohu.html");
	}
	else{
		if($count == 0){
			$count++;
	$sql = "INSERT INTO users(emri,mbiemri,email,fjalekalimi,mosha) VALUES(?,?,?,?,?)";
	$stmt = $dbh->prepare($sql);
	$stmt->execute([$this->emri,$this->mbiemri,$this->email,$this->password,$this->mosha]);
	header("Location: message.php");
	}
	else{
	
	}
	}
	}catch(Exception $e){
		header("Location: Regjistrohu.html");
	}
	}
	}

}
?>

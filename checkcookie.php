<?php
if(isset($_COOKIE['user'])){
	echo "Vlera e cookie-it eshte : ". $_COOKIE['user'];
}
else{
	echo 'Cookie nuk eshte vendosur fare!';
}

?>

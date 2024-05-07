<?php 

try {
	
	$menu=new PDO("mysql:host=localhost;dbname=menu;charset=utf8","root","");
	echo "connexion reussie";
} catch (Exception$e) {
	die("echec de connexion".$e->getMessage());
	
}





 ?>
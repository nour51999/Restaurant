 <?php 
require("cnx.php");

$menu->exec("INSERT INTO commande(nom,prenom,adr,menu)VALUES('".$_POST['nom']."','".$_POST['prenom']."','".$_POST["adr"]."','".$_POST['menu']."')");
echo "Ajout fait avec succe";



 ?>
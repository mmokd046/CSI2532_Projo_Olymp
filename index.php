<?php
try 
{
	$dbuser = 'postgres'; //le nom d'utilsateur de la bdd
	$dbpass = 'Adjamé79';// le mot de passe de la bdd
	$host = 'localhost'; //adresse du serveur
	$dbname='DatabaseProject';//le nom de la base de donnees
	$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($dbh){
	}	
}
catch (PDOException $e){
	echo "Error : " . $e->getMessage() . "<br/>";
	die();
}

?>
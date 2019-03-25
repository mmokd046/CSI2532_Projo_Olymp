<?php
try 
{
	$dbuser = 'postgres'; //le nom d'utilsateur de la bdd
	$dbpass = 'Young1017!';// le mot de passe de la bdd
	$host = 'localhost'; //adresse du serveur
	$dbname='postgres';//le nom de la base de donnees
	$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stm = $dbh->prepare('select * from faculty');
	
	$stm->execute();
	$result = $stm->fetchAll();
	//print "<pre>";
	//print_r($result);
	//print "</pre>";
	print '<ul>';
	foreach($result as $val){
		
		print '<li>';
		echo  $val['fnarne'];
		print '</li>';
		
	}
	print '</ul>';
	if ($dbh){//Verfie si la connection a ete bien effectuer
	  //echo 'Connection Succes';
	}
	
}
catch (PDOException $e){
	echo "Error : " . $e->getMessage() . "<br/>";
	die();
}

?>
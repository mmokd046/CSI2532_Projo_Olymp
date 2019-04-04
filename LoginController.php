
<?php

$username = $_POST['username'];
$password = $_POST['password'];


include_once 'index.php';
$query = "SELECT * FROM user_table 
		  WHERE username='$username' AND password='$password' LIMIT 1;";
$stm = $dbh->prepare($query);
$stm->execute();
$result = $stm->fetchAll();
$username= $result[0]['username'];
$password = $result[0]['password'];

$notFound = sizeof($result) < 1;

if (!isset($username) || !isset($password) ) {
echo '<script language="javascript">';
echo 'alert("Vous avez pas rentrer votre username ou votre mot de passe")';
echo '</script>';
print_r($result );
print_r($username );
print_r($password );
} else if ($notFound) {
echo '<script language="javascript">';
echo 'alert("Vous avez entrer le mauvais mot de passe ou mauvais username")';
echo '</script>';
print_r($result );
} else {
	print_r($result );
	header("Location: AdminWelcomePage.php"); 
}



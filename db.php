<?php 



$dbuser ='root';
$dbpass ='';


try {
	$dbcon = new PDO('mysql:host=localhost;dbname=crud', $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	// instannciation d'une nouvelle connexion
	// si la connexion echoue, PDO lancera une exception
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// cette ligne demande à transformer les erreurs en message d'erreur de type exception
	// echo 'BRAVOOOOO, vous êtes connecté';

} catch(PDOException $e) {
	echo 'attention la connexion n\'a pas été réalisée. <br/>';
	echo "erreur !".$e->getMessage().'<br/>';
	die();
}


?>
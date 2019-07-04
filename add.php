<?php 


include 'db.php';
$prenom = $_POST["prenom"];
$nom = $_POST['nom'];
$email = $_POST['email'];


$statement = $dbcon->prepare("INSERT INTO users (`id`, `nom`, `prenom`, `email`) VALUES (NULL,'$nom','$prenom', '$email')");
$statement->execute();

header('Location:principal.php');//pour afficher la page principal en retour

 ?>
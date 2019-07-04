<?php 
include 'db.php';

$id=$_POST['id'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mail=$_POST['email'];

echo $id.$prenom.$nom;

$statmt= $dbcon->prepare("UPDATE users SET nom='$nom',prenom='$prenom', email='$mail' WHERE id=$id");
$statmt->execute();
header('Location:principal.php');

 ?>
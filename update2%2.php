<?php 
include 'db.php';

$id=$_POST['id'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
echo $id.$prenom.$nom;

// $statmt= $dbcon->prepare("UPDATE users SET `id`=[value-1],`nom`=[value-2],`prenom`=[value-3] WHERE id=$id");


 ?>
<?php
include 'db.php';

$id = $_POST["identite"];
// echo $id;
$statement = $dbcon->prepare("DELETE FROM users WHERE id=$id");
$statement->execute();
header('Location:principal.php);

?>
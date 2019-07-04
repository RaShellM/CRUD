<?php
include 'db.php';

$did=$_GET['deleteId'];
// print_r($did);
$stt = $dbcon->prepare("DELETE FROM users WHERE id=$did");
$stt->execute();

 ?>
<?php 
	include ('db.php');
		$update = $_GET['updateID'];
		// echo $update;

		$stmt = $dbcon->prepare("SELECT * FROM users where id=$update");
		$stmt->execute();


	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract ($row);
?>
	<form method='POST' action="update2%2.php">
		<input type="int" name="id" value="<?php echo $id?>">
		<input type="text" name="prenom" value="<?php echo $prenom?>">
		<input type="text" name="nom" value="<?php echo $nom?>">
		<input type="submit" value="MODIFIER">
	</form>
<?php 

	} 
?>
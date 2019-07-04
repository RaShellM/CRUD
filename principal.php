<!DOCTYPE html>
<html>
<head>
	<title>crud
	</title>
	<link rel="stylesheet" type="text/css" href="principal.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<DIV class="container">
		<?php 
		include 'db.php';
		?>
		<div class="row">
			<h1 class="display-4">Formulaire, php et Sql</h1>
			<img id='imgphp' src="phpsql.jpg">
		</div>
		<div class="row">
			<div class="col-7">
				<hr>
					<h1>Formulaire de contact</h1>
				<hr>
				<form method='POST' action='add.php'>
					<div class="form-group">
					<label name="nom">NOM</label><br>
					<input type="text" name="nom" id="nom">
					</div>
					<div class="form-group">
					<label>Prenom</label><br>
					<input type="text" name="prenom" id='prenom'>
					</div>
					<div class="form-group">
					<label>Email</label><br>
					<input type="text" name="email" id='email'>
					</div>
					<br>
					<input class="btn btn-primary" type="submit" value="ENVOYER">

				</form>
				<hr>
			</div>
			<div class="col-4">
				<hr>
					<h1>Supprimer par ID</h1>
				<hr>
				<form method='POST' action='deletebyid.php'>
					<br>
					<label>Rentre l'id</label><br>
					<input type="int" name="identite">
					<br>
					<small id="supp" class="form-text text-muted">Attention, vous allez supprimer definitvement les informations de la ligne selectionnée</small>
					<br>
					<input class="btn btn-danger" type="submit" value="SUPPRIMER">
				</form>
				<hr>
				<br>
			</div>
		</div>
		<div class="row jumbotron">
			<h2>synthèse des enregistrements dans la base de donnée</h2>

			<?php 
			$statement = $dbcon->prepare("SELECT * FROM users");
			$statement->execute();
			?>
			<table>
				<tr>
					<td>id</td>
					<td>prenom</td>
					<td>nom</td>
					<td>email</td>
				</tr>
				<?php 
				while($tott=$statement->fetch(PDO::FETCH_ASSOC)){
				// extract($row); /// et ensuite dans echo $id
				// print_r($tott);

					?>
					<tr>
						<td><?php echo $tott['id'] ?></td>
						<td><?php echo $tott['prenom'] ?></td>
						<td><?php echo $tott['nom']?></td>
						<td><?php echo $tott['email']?></td>
						<td> <a href="delete.php?deleteId=<?php echo $tott['id']; ?>">SUPPRIMER</a></td>
						<td><a href="update1.php?updateID=<?php echo $tott['id'];?>">MODIFIER</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
</DIV>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
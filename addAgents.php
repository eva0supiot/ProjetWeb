<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link href="tout_parcourir.css" rel="stylesheet" type="text/css"/>

	<title>Ajouter un agent</title>
</head>
<body>
	<!-- En tête d'Eva -->
    <?php include('menuAdmi.php'); ?>

    <div>
    	<br>
    	<br>
    	<table class="table2" border="2">
			<form action="traitementAddAgents.php" method="post">

				<tr>
					<td>
						Nom
					</td>
					<td>
						<input type="text" name="nom">
					</td>
				</tr>
				<tr>
					<td>
						Prénom
					</td>
					<td>
						<input type="text" name="prenom">
					</td>
				</tr>
				<tr>
					<td>
						Adresse mail
					</td>
					<td>
						<input type="text" name="email">
					</td>
				</tr>
				<tr>
					<td>
						Mot de Passe
					</td>
					<td>
						<input type="password" name="mdp">
					</td>
				</tr>
				<tr>
					<td>
						Téléphone
					</td>
					<td>
						<input type="number" name="phone">
					</td>
				</tr>
				<tr>
					<td>
						Specialite
					</td>
					<td>
						<input type="text" name="specialite">
					</td>
				</tr>
				<tr>
					<td>
						Age
					</td>
					<td>
						<input type="number" name="age">
					</td>
				</tr>
				<tr>
					<td>
						Etude
					</td>
					<td>
						<input type="text" name="etude">
					</td>
				</tr>
				<tr>
					<td>
						Experience
					</td>
					<td>
						<input type="text" name="experience">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input class="bouttonFormulaire" type="submit" name="submit" value="Ajouter">
					</td>
				</tr>
			</form>
		</table>
    </div>

<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>

</body>
</html>
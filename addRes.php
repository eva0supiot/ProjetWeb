<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link href="tout_parcourir.css" rel="stylesheet" type="text/css"/>

	<title>Ajouter une résidence</title>
</head>
<body>
	<!-- En tête d'Eva -->
    <?php include('menuAdmi.php'); ?>

    <div>
    	<br>
    	<br>
    	<table class="table2" border="2">
			<form action="traitementAddRes.php" method="post">

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
						Adresse
					</td>
					<td>
						<input type="text" name="adresse">
					</td>
				</tr>
				<tr>
					<td>
						Prix
					</td>
					<td>
						<input type="number" name="prix">
					</td>
				</tr>
				<tr>
					<td>
						Surface
					</td>
					<td>
						<input type="number" name="surface">
					</td>
				</tr>
				<tr>
					<td>
						Dimension
					</td>
					<td>
						<input type="number" name="dimension">
					</td>
				</tr>
				<tr>
					<td>
						Nombre de Chambre
					</td>
					<td>
						<input type="number" name="chambre">
					</td>
				</tr>
				<tr>
					<td>
						Nombre de salle de bain
					</td>
					<td>
						<input type="number" name="salle_de_bain">
					</td>
				</tr>
				<tr>
					<td>
						Nombre de salle de toilette
					</td>
					<td>
						<input type="number" name="toilette">
					</td>
				</tr>
				<tr>
					<td>
						Nombre de salle de cuisine
					</td>
					<td>
						<input type="number" name="cuisine">
					</td>
				</tr>
				<tr>
					<td>
						Nombre de salle de salon
					</td>
					<td>
						<input type="number" name="salon">
					</td>
				</tr>
				<tr>
					<td>
						A propos
					</td>
					<td>
						<input type="text" name="a_propos">
					</td>
				</tr>
				<tr>
					<td>
						Caractéristiques principales
					</td>
					<td>
						<input type="text" name="caracteristique_principale">
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
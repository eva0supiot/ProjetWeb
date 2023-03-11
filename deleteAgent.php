<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="biens_maison.css" rel="stylesheet" type="text/css"/>
	<title>Delete Agent</title>
</head>
<body>
	<!-- pour inclure le menu -->
<?php include('menuAdmi.php'); ?>

<br> <br> <br> <br>

<h1>Supprimer un bien</h1>

<?php

try
{
	// On se connecte à MySQL
	// Modifier la ligne si vous êtes sur MAMP mais garder le mienne en comm
	$mysqlClient = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM agents';
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_appart = $requete->fetchAll();

foreach($immo_appart as $res){
?>

<section>
	<res>
		<div class="bien">
			<h3> <?php echo $res["Prenom"] ?></h3>
			<h4><?php echo $res["nomAgent"] ?></h4>
			<p><br /></p>
			<h3><a href="traitementDelete.php?id=<?php echo $res['id'];?>&table=agents"> Supprimer </a></h3>
		</div>
	</res>
</section>
<?php
}
?>
</body>
</html>
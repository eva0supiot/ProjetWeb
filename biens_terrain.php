<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="biens_maison.css" rel="stylesheet" type="text/css"/>
	<title>Terrain</title>
</head>

<!-- pour inclure le menu -->
<?php include('menu.php'); ?>

<br> <br> <br> <br>

<h1>Terrain</h1>

<?php

try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8', 'root', 'root');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM immo_terrain';
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_terrain = $requete->fetchAll();


$titre = "Liste des maisons";

#include -> les autres pages

foreach($immo_terrain as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<a href="bien_terrain.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/terrain<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
			</div>
			<h2> <a href="bien_terrain.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
			<h3> <a href="bien_terrain.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
			<h4> <a href="bien_terrain.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
		</div>
	</res>
</section>
<?php
}
?>
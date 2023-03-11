<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="biens_maison.css" rel="stylesheet" type="text/css"/>
	<title>Appartement à louer</title>
</head>

<!-- pour inclure le menu -->
<?php include('menu.php'); ?>

<br> <br> <br> <br>

<h1>Supprimer un bien</h1>

<?php

try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM immo_appart';
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_appart = $requete->fetchAll();

foreach($immo_appart as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<img src="maisons_du_projet/appart<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210">
			</div>
			<h3> <?php echo $res["nom"] ?></h3>
			<h4><?php echo $res["adresse"] ?></h4>
			<p><br /></p>
			<h3><a href="traitementDelete.php?id=<?php echo $res['id'];?>&table=immo_appart"> Supprimer </a></h3>
		</div>
	</res>
</section>
<?php
}
?>


<?php 
// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM immo_res';
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_res = $requete->fetchAll();

foreach($immo_res as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<img src="maisons_du_projet/maison<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210">
			</div>
			<h3> <?php echo $res["nom"] ?></h3>
			<h4><?php echo $res["adresse"] ?></h4>
			<p><br /></p>
			<h3><a href="traitementDelete.php?id=<?php echo $res['id'];?>&table=immo_res"> Supprimer </a></h3>
		</div>
	</res>
</section>

<?php
}
?>


<?php 
// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM immo_commerce';
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_commerce = $requete->fetchAll();

foreach($immo_commerce as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<img src="maisons_du_projet/commerce<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210">
			</div>
			<h3> <?php echo $res["nom"] ?></h3>
			<h4><?php echo $res["adresse"] ?></h4>
			<p><br /></p>
			<h3><a href="traitementDelete.php?id=<?php echo $res['id'];?>&table=immo_commerce"> Supprimer </a></h3>
		</div>
	</res>
</section>

<?php
}
?>


<?php 
// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM immo_terrain';
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_terrain = $requete->fetchAll();

foreach($immo_terrain as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<img src="maisons_du_projet/terrain<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210">
			</div>
			<h3> <?php echo $res["nom"] ?></h3>
			<h4><?php echo $res["adresse"] ?></h4>
			<p><br /></p>
			<h3><a href="traitementDelete.php?id=<?php echo $res['id'];?>&table=immo_terrain"> Supprimer </a></h3>
		</div>
	</res>
</section>

<?php
}
?>

<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>
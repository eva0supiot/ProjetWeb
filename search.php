<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="biens_maison.css" rel="stylesheet" type="text/css"/>
	<title>Recherche</title>
</head>

<!-- pour inclure le menu -->
<?php include('menu.php'); ?>

<br> <br> <br> <br>

<h1>Recherche</h1>

<?php
	// declaration des variables
	$recherche=isset($_POST['recherche'])? $_POST['recherche'] : "";

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

///////////////////////////////////////////// recherche avec le nom l'adresse du bien ////////////////////////////////////////////////////////////

	$sqlQuery="SELECT * FROM `immo_appart` WHERE `nom` LIKE '%$recherche%' OR `adresse` LIKE '%$recherche%' ";
	$requete = $mysqlClient->query($sqlQuery);
	$requete->execute();
	$immo_appart = $requete->fetchAll();

	foreach($immo_appart as $res){
	?>
		<section>
			<res>
			<div class="bien">
			<div class="image">
				<a href="bien_appart.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/appart<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
			</div>
			<h2> <a href="bien_appart.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
			<h3> <a href="bien_appart.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
			<h4> <a href="bien_appart.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
			</div>
			</res>
		</section>
	<?php
	}
?>

<?php 

// On récupère tout le contenu de la table recipes
$sqlQuery="SELECT * FROM `immo_res` WHERE `nom` LIKE '%$recherche%' OR `adresse` LIKE '%$recherche%' ";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_res = $requete->fetchAll();

foreach($immo_res as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<a href="bien_maison.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/maison<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
			</div>
			<h2> <a href="bien_maison.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
			<h3> <a href="bien_maison.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
			<h4> <a href="bien_maison.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
		</div>
	</res>
</section>

<?php
}
?>


<?php 
// On récupère tout le contenu de la table recipes
$sqlQuery="SELECT * FROM `immo_commerce` WHERE `nom` LIKE '%$recherche%' OR `adresse` LIKE '%$recherche%' ";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_commerce = $requete->fetchAll();

foreach($immo_commerce as $res){
?>

<section>
	<res>
		<div class="bien">
			<div class="image">
				<a href="bien_commerce.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/commerce<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
			</div>
			<h2> <a href="bien_commerce.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
			<h3> <a href="bien_commerce.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
			<h4> <a href="bien_commerce.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
		</div>
	</res>
</section>

<?php
}
?>


<?php 
// On récupère tout le contenu de la table recipes
$sqlQuery="SELECT * FROM `immo_terrain` WHERE `nom` LIKE '%$recherche%' OR `adresse` LIKE '%$recherche%' ";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$immo_terrain = $requete->fetchAll();

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

<?php ///////////////////////////////////////////// recherche avec l'agent immobilier //////////////////////////////////////////////////////////// ?>

<?php 
// On récupère tout le contenu de la table recipes
$sqlQuery="SELECT * FROM `agents` WHERE `nomAgent` LIKE '%$recherche%' OR `Prenom` LIKE '%$recherche%' ";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$agents = $requete->fetchAll();

foreach($agents as $res){
?>
	<?php if ($res["specialite"]=="Immobilier résidentiel")
	{
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
						<a href="bien_immo.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/maison<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
					</div>
					<h2> <a href="bien_immo.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
					<h3> <a href="bien_immo.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
					<h4> <a href="bien_immo.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
				</div>
			</res>
		</section>
		<?php
		}
		?>

	<?php
	}?>

	<?php if ($res["specialite"]=="Immobilier commercial")
	{  
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
						<a href="bien_commerce.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/commerce<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
					</div>
					<h2> <a href="bien_commerce.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
					<h3> <a href="bien_commerce.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
					<h4> <a href="bien_commerce.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
				</div>
			</res>
		</section>
		<?php
		}
		?>

	<?php
	}?>

	<?php if ($res["specialite"]=="Appartement à louer")
	{ 
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
						<a href="bien_appart.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/appart<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
					</div>
					<h2> <a href="bien_appart.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
					<h3> <a href="bien_appart.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
					<h4> <a href="bien_appart.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
				</div>
			</res>
		</section>
		<?php
		}
		?>
	<?php
	}?>

	<?php if ($res["specialite"]=="Terrain")
	{  
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
	<?php
	}?>

<?php 
}
?>

<?php  ///////////////////////////////////////////// recherche avec le numero/référence du bien ////////////////////////////////////////////////////////// ?>


<?php for ($i = 1; $i <= 8; $i++) {

		$ref1="M".$i;
		$ref2="C".$i;
		$ref3="T".$i;
		$ref4="A".$i;

		if ($recherche==$ref1)
		{
			$sqlQuery = 'SELECT * FROM immo_res WHERE id = '.intval($i);
			$requete = $mysqlClient->query($sqlQuery);
			$requete->execute();
			$immo_res = $requete->fetchAll();

			foreach($immo_res as $res){
			?>

			<section>
				<res>
					<div class="bien">
						<div class="image">
							<a href="bien_immo.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/maison<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
						</div>
						<h2> <a href="bien_immo.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
						<h3> <a href="bien_immo.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
						<h4> <a href="bien_immo.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
					</div>
				</res>
			</section>
			<?php
			}
		}

		if ($recherche==$ref2)
		{
			$sqlQuery = 'SELECT * FROM immo_commerce WHERE id = '.intval($i);
			$requete = $mysqlClient->query($sqlQuery);
			$requete->execute();
			$immo_commerce = $requete->fetchAll();

			foreach($immo_commerce as $res){
			?>

			<section>
				<res>
					<div class="bien">
						<div class="image">
							<a href="bien_commerce.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/commerce<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
						</div>
						<h2> <a href="bien_commerce.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
						<h3> <a href="bien_commerce.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
						<h4> <a href="bien_commerce.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
					</div>
				</res>
			</section>
			<?php
			}
		}

		if ($recherche==$ref3)
		{
			$sqlQuery = 'SELECT * FROM immo_terrain WHERE id = '.intval($i);
			$requete = $mysqlClient->query($sqlQuery);
			$requete->execute();
			$immo_terrain = $requete->fetchAll();

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
		}

		if ($recherche==$ref4)
		{
			$sqlQuery = 'SELECT * FROM immo_appart WHERE id = '.intval($i);
			$requete = $mysqlClient->query($sqlQuery);
			$requete->execute();
			$immo_appart = $requete->fetchAll();

			foreach($immo_appart as $res){
			?>

			<section>
				<res>
					<div class="bien">
						<div class="image">
							<a href="bien_appart.php?id=<?=$res["id"]?>"><img src="maisons_du_projet/appart<?php echo $res["id"] ?>_1.png" alt="Bien1" height="135" width="210"></a>
						</div>
						<h2> <a href="bien_appart.php?id=<?=$res["id"]?>">£ <?php echo $res["prix"] ?></a></h2>
						<h3> <a href="bien_appart.php?id=<?=$res["id"]?>"><?php echo $res["nom"] ?></a> </h3>
						<h4> <a href="bien_appart.php?id=<?=$res["id"]?>"><?php echo $res["adresse"] ?></a></h4>
					</div>
				</res>
			</section>
			<?php
			}
		}
}
?>


<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>
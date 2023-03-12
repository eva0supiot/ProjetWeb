<link rel="stylesheet" href="style.css">

<?php


	//En tête
    include('menuAdmi.php');
	/*
	 * Il faudra choisir quel type de passage des informations on conserve
	 * en fonction de la page qu'il l'appelle faite par Eva ou moi 
	*/

	$nom=isset($_POST['nom'])? $_POST['nom'] : "";
	$adresse=isset($_POST['adresse'])? $_POST['adresse'] : "";
	$prix=isset($_POST['prix'])? $_POST['prix'] : "";
	//$type=isset($_POST['type'])? $_POST['type'] : "";
	$surface=isset($_POST['surface'])? $_POST['surface'] : "";
	$dimension=isset($_POST['dimension'])? $_POST['dimension'] : "";
	$activite=isset($_POST['activite'])? $_POST['activite'] : "";
	$a_propos=isset($_POST['a_propos'])? $_POST['a_propos'] : "";
	$caracteristique_principale=isset($_POST['caracteristique_principale'])? $_POST['caracteristique_principale'] : "";
	$video=isset($_POST['video'])? $_POST['video'] : "";
	$pdf=isset($_POST['pdf'])? $_POST['pdf'] : "";

	/*
	 *  Cette partie est à supprimer
	 *	elle était la pour le test**/

	/*
	$nom="nom";
	$adresse="adresse";
	$prix=1;
	$type="type";
	$surface=2;
	$dimension=3;
	$activite="activite";
	$a_propos="a_propos";
	$caracteristique_principale="caracteristique_principale";
	$video=0;
	$pdf=0;
	*/
	
	/***** Connexion à la base de donnée projetweb *****/
 	$database = "projetweb";
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found):	// si on trouve la BDD 
		/***** Requette permettant se supprimer un immobilier à partir de son id et de sa table *****/
		$sql="";
		$sql="INSERT INTO `immo_commerce` (`nom`, `adresse`, `prix`, `type`, `surface`, `dimension`, `activite`, `a_propos`, `caracteristique_principale`, `video`, `pdf`) 
			VALUES
			('$nom', '$adresse', $prix, 'Commerce', $surface, $dimension, '$activite', '$a_propos', '$caracteristique_principale', 0, 0)";

		$result = mysqli_query($db_handle, $sql);

		?>
			<div class="centre">
				<h2>Le commerce a été ajouté</h2>
			</div>
			
		 <?php

		//close database
		mysqli_close($db_handle);
	else:	// BDD introuvable
		echo "database not found";
	endif;

?>
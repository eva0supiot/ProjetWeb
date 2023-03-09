<?php

	/*
	 * Il faudra choisir quel type de passage des informations on conserve
	 * en fonction de la page qu'il l'appelle faite par Eva ou moi 
	*/

	$nom=isset($_POST['nom'])? $_POST['nom'] : "";
	$adresse=isset($_POST['adresse'])? $_POST['adresse'] : "";
	$prix=isset($_POST['prix'])? $_POST['prix'] : "";
	$type=isset($_POST['type'])? $_POST['type'] : "";
	$surface=isset($_POST['surface'])? $_POST['surface'] : "";
	$dimension=isset($_POST['dimension'])? $_POST['dimension'] : "";
	$chambre=isset($_POST['chambre'])? $_POST['chambre'] : "";
	$salle_de_bain=isset($_POST['salle_de_bain'])? $_POST['salle_de_bain'] : "";
	$toilette=isset($_POST['toilette'])? $_POST['toilette'] : "";
	$cuisine=isset($_POST['cuisine'])? $_POST['cuisine'] : "";
	$salon=isset($_POST['salon'])? $_POST['salon'] : "";
	$a_propos=isset($_POST['a_propos'])? $_POST['a_propos'] : "";
	$caracteristique_principale=isset($_POST['caracteristique_principale'])? $_POST['caracteristique_principale'] : "";

    /*
	$nom="nom";
	$adresse="adresse";
	$prix=100000.000;
	$type="Maison";
	$surface=1.0;
	$dimension=1.0;
	$chambre=11;
	$salle_de_bain=3;
	$toilette=5;
	$cuisine=1;
	$salon=2;
	$a_propos="riche";
	$caracteristique_principale="grande";
	*/

	/***** Connexion à la base de donnée projetweb *****/
 	$database = "projetweb";
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found):	// si on trouve la BDD 
		/***** Requette permettant se supprimer un immobilier à partir de son id et de sa table *****/
		$sql="";
		$sql="INSERT INTO `immo_terrain` (`nom`, `adresse`, `prix`, `type`, `surface`, `dimension`, `chambre`, `salle_de_bain`, `toilette`, `cuisine`, `salon`, `a_propos`, `caracteristique_principale`) 
		VALUES('$nom', '$adresse', $prix, '$type', $surface, $dimension, $chambre, $salle_de_bain, $toilette, $cuisine, $salon, '$a_propos', '$caracteristique_principale')";

		$result = mysqli_query($db_handle, $sql);

		//close database
		mysqli_close($db_handle);
	else:	// BDD introuvable
		echo "database not found";
	endif;

?>
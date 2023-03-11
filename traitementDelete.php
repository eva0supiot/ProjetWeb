<?php

/*
	 * Il faudra choisir quel type de passage des informations on conserve
	 * en fonction de la page qu'il l'appelle faite par Eva ou moi 
	*/
	
	/*$id=isset($_POST['id'])? $_POST['id'] : "";
	$table=isset($_POST['table'])? $_POST['table'] : "";*/

	include('menuAdmi.php');

	if (isset($_GET['id'])) {
			$id = $_GET['id'];
			//echo "Le nom d'utilisateur est : " . $id;
		}
	if (isset($_GET['table'])) {
			$table = $_GET['table'];
			//echo "La table est : " . $table;
		}

	/***** Connexion à la base de donnée projetweb *****/
 	$database = "projetweb";
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found):	// si on trouve la BDD 
		/***** Requette permettant se supprimer un immobilier à partir de son id et de sa table *****/
		$sql="";
		$sql=" DELETE FROM `$table` WHERE `$table`.`id` = $id";
		$result = mysqli_query($db_handle, $sql);
		?> <h1>L'élément a bien été supprimé </h1><?php
		//close database
		mysqli_close($db_handle);
	else:	// BDD introuvable
		echo "database not found";
	endif;

?>
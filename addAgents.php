<?php

	/*
	 * Il faudra choisir quel type de passage des informations on conserve
	 * en fonction de la page qu'il l'appelle faite par Eva ou moi 
	*/

	$prenom=isset($_POST['prenom'])? $_POST['prenom'] : "";
	$nom=isset($_POST['nom'])? $_POST['nom'] : "";
	$email=isset($_POST['email'])? $_POST['email'] : "";
	$phone=isset($_POST['phone'])? $_POST['phone'] : "";
	$specialite=isset($_POST['specialite'])? $_POST['specialite'] : "";
	$age=isset($_POST['age'])? $_POST['age'] : "";
	$etude=isset($_POST['etude'])? $_POST['etude'] : "";
	$experience=isset($_POST['experience'])? $_POST['experience'] : "";
	$lundi=isset($_POST['lundi'])? $_POST['lundi'] : "";
	$mardi=isset($_POST['mardi'])? $_POST['mardi'] : "";
	$mercredi=isset($_POST['mercredi'])? $_POST['mercredi'] : "";
	$jeudi=isset($_POST['jeudi'])? $_POST['jeudi'] : "";
	$vendredi=isset($_POST['vendredi'])? $_POST['vendredi'] : "";

	/*
	 *  Cette partie est à supprimer
	 *	elle était la pour le test
	$prenom='Rafa';
	$nom='Federer';
	$email="roger";
	$phone=1234;
	$specialite="vendeur";
	$age=20;
	$etude="inge";
	$experience="SAS";
	$lundi=1;
	$mardi=2;
	$mercredi=3;
	$jeudi=4;
	$vendredi=5;
	*/

	/***** Connexion à la base de donnée projetweb *****/
 	$database = "projetweb";
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found):	// si on trouve la BDD 
		/***** Requette permettant se supprimer un immobilier à partir de son id et de sa table *****/
		$sql="";
		$sql="INSERT INTO `agents` (`prenomAgent`, `nomAgent`, `emailAgent`, `num`, `specialite`, `age`, `etude`, `experience`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`) 
			VALUES('$prenom', '$nom', '$email', $phone, '$specialite', $age, '$etude', '$experience', $lundi, $mardi, $mercredi, $jeudi, $vendredi)";

		$result = mysqli_query($db_handle, $sql);

		//close database
		mysqli_close($db_handle);
	else:	// BDD introuvable
		echo "database not found";
	endif;

?>
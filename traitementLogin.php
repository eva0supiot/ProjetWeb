<?php
	// declaration des variables
	$email=isset($_POST['mail'])? $_POST['mail'] : "";
	$password=isset($_POST['mdp'])? $_POST['mdp'] : "";

	$erreur ="";


	 if($email==""){
	 	$erreur.="Le champ adresse mail est vide. <br>";
	 }
	 if($password==""){
	 	$erreur.="Le champ mot de passe est vide. <br>";
	 }

	 if (isset($_GET['table'])) {
			$table = $_GET['table'];
		}

	 if($erreur==""):

	 	/***** Connexion à la base de donnée projetweb *****/
	 	$database = "projetweb";
		$db_handle = mysqli_connect('localhost','root','');
		$db_found = mysqli_select_db($db_handle, $database);

		if($db_found):	// si on trouve la BDD 
			/***** Requette permettant de trouvé un client à partir de son adresse mail et de son mot de passe *****/
			$sql="";
			$sql="SELECT * FROM `$table` WHERE Email='$email' AND MotDePasse ='$password'";
			$result = mysqli_query($db_handle, $sql);
			$data=mysqli_fetch_assoc($result);

			if($data):	// on trouve la BDD
				echo "Autentification réussi Bonjour ". $data['Prenom'];
				if($table=='clients'):
					?> 
					<a href="userClients.php?id=<?php echo $data['ID']; ?>">Cliquez ici pour vous connecter <?php echo $data['Prenom']; ?></a>
					<?php
				elseif ($table=='administrateurs'):
					?> 
					<a href="userAdministrateurs.php?id=<?php echo $data['ID']; ?>">Cliquez ici pour vous connecter <?php echo $data['Prenom']; ?></a>
					<?php
				elseif ($table=='agents'):
					?> 
					<a href="userAgents.php?id=<?php echo $data['id']; ?>">Cliquez ici pour vous connecter <?php echo $data['Prenom']; ?></a>
					<?php
				endif;
					
			else:	// Utilisateur n'est pas dans la BDD
				echo $table." introuvable";
			endif;

			//close database
			mysqli_close($db_handle);
		else:	// BDD introuvable
			echo "database not found";
		endif;
	 else:
	 	echo "Erreur : <br>".$erreur;
	 endif;
?>
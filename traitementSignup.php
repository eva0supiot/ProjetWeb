<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traitement de la connexion</title>
	<link rel="stylesheet" href="style.css">
  	<link href="tout_parcourir.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php
		// declaration des variables
		$name=isset($_POST['nom'])? $_POST['nom'] : "";
		$firstname=isset($_POST['prenom'])? $_POST['prenom'] : "";
		$adress=isset($_POST['adresse'])? $_POST['adresse'] : "";
		$city=isset($_POST['ville'])? $_POST['ville'] : "";
		$cp=isset($_POST['codePostal'])? $_POST['codePostal'] : "";
		$country=isset($_POST['pays'])? $_POST['pays'] : "";
		$phone=isset($_POST['telephone'])? $_POST['telephone'] : "";
		$password=isset($_POST['mdp'])? $_POST['mdp'] : "";
		$password2=isset($_POST['motDePasse'])? $_POST['motDePasse'] : "";
		$email=isset($_POST['mail'])? $_POST['mail'] : "";

		$erreur ="";

		 if($name==""){
		 	$erreur.="Le champ nom est vide. <br>";
		 }
		 if($firstname==""){
		 	$erreur.="Le champ prénom est vide. <br>";
		 }
		 if($adress==""){
		 	$erreur.="Le champ adresse est vide. <br>";
		 }
		 if($city==""){
		 	$erreur.="Le champ ville est vide. <br>";
		 }
		 if($cp==""){
	     	 	$erreur.="Le champ code postal est vide. <br>";
	     }
	     if($country==""){
	            $erreur.="Le champ pays est vide. <br>";
	     }
	     if($phone==""){
	           $erreur.="Le champ téléphone est vide. <br>";
	     }
	     if($password==""){
		 	$erreur.="Le champ mot de passe est vide. <br>";
		 }
		 if($password2==""){
	     	 	$erreur.="Veuillez confimer le mot de passe <br>";
	     }
	     if($email==""){
		 	$erreur.="Le champ adresse mail est vide. <br>";
		 }


		 if($erreur==""):
		 	if($password==$password2):
	            
                $database = "projetweb";
				$db_handle = mysqli_connect('localhost','root','');
				$db_found = mysqli_select_db($db_handle, $database);

				if($db_found):

					$sql="";
					$sql="SELECT * FROM `clients` WHERE Email='$email'";
					$result = mysqli_query($db_handle, $sql);
					$data=mysqli_fetch_assoc($result);

					if($data) :
						echo "Adresse mail déjà utilisée";
					else:
						$sql="";
						$sql = "INSERT INTO clients VALUES (ID,'$name','$firstname','$adress','$city',$cp,'$country',$phone,'$email','$password')";
						$result = mysqli_query($db_handle, $sql);
					 	//fermer la co
						mysqli_close($db_handle);

						?>
						<div class="centre">
						<p>
							Votre<span class="titre"> espace personnelle</span> a bien été crée. Connectez-vous avez votre BEE compte pour continuer</p>
						</div>

						<div class = "centre">
							<form>
								<table>
									<td>
										<a id="boutton" href="login.php">Connexion</a>
									</td>
								</table>
							</form>
						</div>
						<?php
					endif;			
				
				else:
					echo "<br> database not found";
				endif;
				
	            
	            else:
	                echo "Les mots de passe sont différents";
	            endif;
		 
		 else:
		 	echo "Erreur : <br>".$erreur;
		 endif;
	?>
</body>
</html>

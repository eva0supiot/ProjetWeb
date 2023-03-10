<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Compte</title>
</head>
<body>
	<h1>Bonjour vs êtes CO</h1>
	<p>
		Ici c'est l'espace perso du BG donc il faudra y faire plein de truc BG les renez vous voir les maisons tout ça tout ça.
		Mais enft le truc qui est cool c'est que ce n'est pas une simple page que j'ai appelé comme ça ou hasard.
		Bah oui eheh enft cette page contient l'id du monsieur ou de la madame connecter et avec son id bah on sait tout de lui et ça c'est vrmt trop cool !!!!
		Du coup ce que je vais faire la je pense c'est que je vais charger la BDD ici pour accèder aux données voily voilou bon je vous laisse j'ai du taffe du coup on se revoit tout à l'heure ;-)
	</p>
	<?php
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			echo "Le nom d'utilisateur est : " . $id;
		}

		$database = "projetweb";
		$db_handle = mysqli_connect('localhost','root','');
		$db_found = mysqli_select_db($db_handle, $database);

		if($db_found){
			$sql="";
			$sql="SELECT * FROM `clients` WHERE ID='$id'";
			$result = mysqli_query($db_handle, $sql);
			$data=mysqli_fetch_assoc($result);

			 echo '< table border ="1">';
			 echo '<tr>';
			 echo "<td>". $data['ID'] . "</td>";
			 echo "<td>". $data['Nom']. "</td>";
			 echo "<td>". $data['Prenom']."</td>";
			 echo "<td>". $data['Email']."</td>";
			 echo "<td>". $data['Adresse']."</td>";
			 echo '</tr>';
			 echo "</table>";
		 }
		 
		else
		{
			echo "<br> database not found";
		}			
	?>
	<p>
		Bon c'est bon je me suis co à la BDD là par exemple j'ai pu sortir toutes ces infos de la BDD de donnée avec mon petit id que j'avais, alors oui c'est très moche pour le moment c'est pour ça qu'on en vient à la véritable question parce que non je n'ai pas fait tout ça pour rien !!!!
	</p>
	<h1>Qui doit faire cette page là ? </h1>
	<p>
		Parce que moi il me semble que je devais faire la connection mais pas le reste des trucs genres rdv, gestion de l'edt dc si j'ai bien compris mon travaille s'arrête là pour les clients ...
		Mais après bon je suis pas sur vu qu'on a fait 
	</p>
	<h1>La répartition des tâches sans moi !!!!!</h1>
</body>
</html>
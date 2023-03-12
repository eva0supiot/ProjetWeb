<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="theme_bien.css" rel="stylesheet" type="text/css"/>
  <link rel="icon" href="bee.png">
	<title>User Compte</title>
</head>
<body>
	<?php 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			echo "Le nom d'utilisateur est : " . $id;
		}
	 ?>

	<div id="titre"><img src="logo_bee.gif" alt="Java logo"height="100" width="550"></div>

	<nav>
	  <ul>
	    <li><a href="accueil.php">Se deconnecter</a></li>

	    <li class="tout_parcourir"><a href="#">Rendez-vous &ensp;</a>
	      <ul class="immo">
	        <li><a href="consulterRDV.php?table=rdv_past&id=<?php echo $id;?>">RDV passé</a></li>
	        <li><a href="consulterRDV.php?table=rdv_to&id=<?php echo $id;?>">RDV à venir</a></li>
	        <li><a href="#">Prendre un nouveau rendez vous</a></li>
	      </ul>
	    </li>
	    <li><a href="#">Recherche</a></li>
	    <li><a href="#">Echanger avec un conseiller</a></li>
	    <li><a href="Argent">Acheter un bien</a>
	    </li>
	  </ul>
	</nav>
</body>
</html>
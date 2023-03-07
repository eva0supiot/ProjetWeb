<?php
//vérification
if(!isset($_GET["idAgent"]) || empty($_GET["idAgent"])){
	// pas d'id
	header("Location: carroussel.php");
	exit;}

// récup de l'id
$idAgent = $_GET["idAgent"];

try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=agentsImmobilier;charset=utf8', 'root', 'root');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$sql ="SELECT * FROM `agents` WHERE `idAgent` = :idAgent";
$requete = $mysqlClient->prepare($sql);
$requete->bindValue(":idAgent",$idAgent, PDO::PARAM_INT);
$requete->execute();
$agents = $requete->fetch();

// article vide?
if(!$agents){
	http_response_code(404);
	echo "Agent indisponible";
	exit;}

$titre=strip_tags($agents["prenomAgent"]);

?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="projet3.css" rel="stylesheet" type="text/css"/>
	<title><?php echo $titre ?></title>
</head>

<h3><center><?php echo $agents["prenomAgent"] ?> <?php echo $agents["nomAgent"] ?></p></h3><br>

<center><a href="agent-immobilier<?php echo $agents["idAgent"]?>.jpeg"><img class="property" src="agent-immobilier<?php echo $agents["idAgent"]?>.jpeg" width="300" height="200" ></a><br>

<h4>
<ul>
<li>Spécialité: <?php echo $agents["specialite"] ?></li>
<li>Téléphone: +33 0<?php echo $agents["num"] ?></li>
<li>Email: <?php echo $agents["emailClient"] ?></li>
</ul>

<h3>Disponibilité:</h3>

<table align="center">

<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th></tr>

<tr><td>9h-18h</td><td>Indisponible</td><td>9h-14h</td><td>9h-18h</td><td>9h-18h</td><td>14-18h</td></tr>

</table></h4>
<br><br>

<center>
<a href="rdv.html"><img src="PRENDRE RENDEZ-VOUS.png" alt="Home" width="150" height="150">
<a href="communiquer.html"><img src="PRENDRE RENDEZ-VOUS 2.png" alt="Home" width="150" height="150">
<a href="CV.html"><img src="PRENDRE RENDEZ-VOUS 3.png" alt="Home" width="150" height="150">

</body>

<?php
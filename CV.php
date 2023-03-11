<?php
//vérification
if(!isset($_GET["id"]) || empty($_GET["id"])){
	header("Location: acceuil-type.php");
	exit;}

// récup de l'id
$id = $_GET["id"];

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

$sql ="SELECT * FROM `agents` WHERE `id` = :id";
$requete = $mysqlClient->prepare($sql);
$requete->bindValue(":id",$id, PDO::PARAM_INT);
$requete->execute();
$agents = $requete->fetch();

// article vide?
if(!$agents){
	http_response_code(404);
	echo "Agent indisponible";
	exit;}

$titre=strip_tags($agents["Prenom"]);

?>

<head>

	<!-- pour inclure le menu --> 
	<?php include('menu.php'); ?>

<title>CV agent immobilier</title>
<meta charset="utf-8" />
<link href="projet3.css" rel="stylesheet" type="text/css"/> 
</head>

<body>

<h3><center>CURRICULUM VITAE - <?php echo $titre ?> <?php echo $agents["nomAgent"] ?></h3><br>

<center><a href="agent-immobilier<?php echo $agents["id"]?>.jpeg"><img class="property" src="agent-immobilier<?php echo $agents["id"]?>.jpeg" width="300" height="200" ></a><br></center>

<center>
<h4>
<ul>
<li>Spécialité: <?php echo $agents["specialite"] ?></li>
<li>Âge: <?php echo $agents["age"] ?></li>
<li>Téléphone: +33 <?php echo $agents["num"] ?></li>
<li>Email: <?php echo $agents["Email"] ?></li><br><br>
<li>Études: Faculté de <?php echo $agents["etude"] ?></li>
<li>Expériences: <?php echo $agents["experience"] ?></li>
</ul>
</h4>
</center>

<center><img src="bee.jpeg" width="300" height="350"></center>

<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>

</body>



<head>
        <title>Agents immobilier</title>
        <meta charset="UTF-8" />
        <link href="carroussel.css" rel="stylesheet" type="text/css"/> 
   </head>

   <body>

<!-- pour inclure le menu --> 
<?php include('menu.php'); ?>

<?php

try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$sqlQuery = "SELECT * FROM `agents` WHERE `specialite` = 'Terrain'";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$agents = $requete->fetchAll();


foreach($agents as $res){
?>

<section>
	<res>
         <center><a href="projets.php?id=<?=$res["id"]?>"><img src="agent-immobilier<?php echo $res["id"]?>.jpeg" alt="Bien1" height="135" width="210"></a></center>
	</res>
</section>

<?php } ?>

<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>

</body>

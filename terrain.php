<head>
        <title>Agents immobilier</title>
        <meta charset="UTF-8" />
        <link href="carroussel.css" rel="stylesheet" type="text/css"/> 
   </head>

   <body>

<?php

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

$sqlQuery = "SELECT * FROM `agents` WHERE `specialite` = 'Terrain'";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$agents = $requete->fetchAll();


foreach($agents as $res){
?>

<section>
	<res>
         <center><a href="projets.php?idAgent=<?=$res["idAgent"]?>"><img src="agent-immobilier<?php echo $res["idAgent"]?>.jpeg" alt="Bien1" height="135" width="210"></a>
	</res>
</section>

</body>

<?php
}?>

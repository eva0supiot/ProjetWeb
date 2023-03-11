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

$sqlQuery = "SELECT * FROM `agents` WHERE `specialite` = 'Immobilier résidentiel'";
$requete = $mysqlClient->query($sqlQuery);
$requete->execute();
$agents = $requete->fetchAll();


foreach($agents as $res){
?>

<section>
	<res>
         <center><a href="projets.php?id=<?=$res["id"]?>"><img src="agent-immobilier<?php echo $res["id"]?>.jpeg" alt="Bien1" height="134" width="210"></a></center>
	</res>
</section>

</body>

<?php
}?>

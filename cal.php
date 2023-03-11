<?php

// récup de l'id
$id= $_GET["id"];

//On se relie à la base de données + on sélectionne les données en fonction de l'id des agents
            $servname = "localhost"; $dbname = "agentsImmobilier"; $user = "root"; $pass = "root";
           
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }

$sth = "SELECT * FROM `agents` WHERE `id` = :id";
$requete = $dbco->prepare($sth);
$requete->bindValue(":id",$id, PDO::PARAM_INT);
$requete->execute();
$agents = $requete->fetch();

//BOUTON LUNDI MATIN
if(isset($_POST["button1"]))
    {
                
if($agents["lundimatin"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
     else if($agents["lundimatin"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
     }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET lundimatin='9' WHERE= :id");
                $sth->execute();
                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
}

//BOUTON LUNDI APREM
 else if(isset($_POST["button2"]))
    {
                
if($agents["lundiaprem"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
     else if($agents["lundiaprem"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET lundiaprem='9' WHERE= :id");
                $sth->execute();

                echo "Le créneau sélectionné vient de vous être réservé.";

}}

//BOUTON MARDI MATIN
else if(isset($_POST["button3"]))
    {
                
if($agents["mardimatin"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
     else if($agents["mardimatin"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET mardimatin='9' WHERE= :id");
                $sth->execute();
                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
    }

//BOUTON MARDI APREM
 else if(isset($_POST["button4"]))
    {
                
if($agents["mardiaprem"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }

    else if($agents["mardiaprem"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET mardiaprem='9' WHERE= :id");
                $sth->execute();

                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
 }

//BOUTON MERCREDI MATIN
else if(isset($_POST["button5"]))
    {

 if($agents["mercredimatin"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
else if($agents["mercredimatin"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET mercredimatin='9' WHERE= :id");
                $sth->execute();
                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
    }

//BOUTON MERCREDI APREM
 else if(isset($_POST["button6"]))
    {
                
if($agents["mercrediaprem"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
else if($agents["mercrediaprem"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET mercrediaprem='9' WHERE= :id");
                $sth->execute();

                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
    }

//BOUTON JEUDI MATIN
else if(isset($_POST["button7"]))
    {
                
 if($agents["juedimatin"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
else if($agents["jeudimatin"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET jeudimatin='9' WHERE= :id");
                $sth->execute();

}
                
}

//BOUTON JEUDI APREM
 else if(isset($_POST["button8"]))
    {
                
if($agents["jeudiaprem"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
else if($agents["jeudiaprem"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET jeudiaprem='9' WHERE= :id");
                $sth->execute();

                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
    }

//BOUTON VENDREDI MATIN
else if(isset($_POST["button9"]))
    {
                
if($agents["vendredimatin"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }

     else if($agents["vendredimatin"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }

     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET vendredimatin='9' WHERE= :id");
                $sth->execute();

}
                
    }

//BOUTON VENDREDI APREM
 else if(isset($_POST["button10"]))
    {
                
if($agents["vendrediaprem"]==9)
 {
echo "Le créneau sélectionné est malheureusement déjà réservé, veuillez en sélectionner un autre s'il vous plaît.";
     }
else if($agents["vendrediaprem"]==3)
 {
echo "L'agent immobilier ne travaille pas durant ce créneau, veuillez en sélectionner un autre s'il vous plaît.";
 }
     else
{
                 //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("UPDATE agents SET vendrediaprem='9' WHERE= :id");
                $sth->execute();

                echo "Le créneau sélectionné vient de vous être réservé.";

}
                
    }
 
 //Ensuite, on code les boutons qui vont apparaitre sur chaque calendrier des agents immobilier         
?>

<head>
        <meta charset="utf-8" />
        <link href="cal.css" rel="stylesheet"/>       
        <title>Page de réservation</title>
    </head>

    <body>

<center><h1>Calendrier de la semaine</h1></center>

<br><br>

  <form method="post">
    <div class="date">
            <div class="day">Lun.
        <div class="hour 1"><input type="submit" name="button1" value="8h-12h" id="hour1"></div>
        <div class="hour 2"><input type="submit" name="button2" value="14h-16h" id="hour2"></div>
    </div>

    <div class="day">Mar.
        <div class="hour 3"><input type="submit" name="button3" value="8h-12h" id="hour3"></div>
        <div class="hour 4"><input type="submit" name="button4" value="14h-16h" id="hour4"></div>
    </div>

    <div class="day">Mer.
        <div class="hour 5"><input type="submit" name="button5" value="8h-12h" id="hour5"></div>
        <div class="hour 6"><input type="submit" name="button6" value="14h-16h" id="hour6"></div>
    </div>

    <div class="day">Jeu.
        <div class="hour 7"><input type="submit" name="button7" value="8h-12h" id="hour7"></div>
        <div class="hour 8"><input type="submit" name="button8" value="14h-16h" id="hour8"></div>
    </div>

    <div class="day">Ven.
        <div class="hour 9"><input type="submit" name="button9" value="8h-12h" id="hour9"></div>
        <div class="hour 10"><input type="submit" name="button10" value="14h-16h" id="hour10"></div>
    </div>


</div>
</form>
</body>


<?php

echo '<meta charset="utf-8">';
echo '<link rel="stylesheet" type="text/css" href="rdvStyle.css">';
if (isset($_GET['id'])) {
      $id = $_GET['id'];
      //echo "L'id : " . $id;
      //include('menuClients.php?id=$id');
    }

if (isset($_GET['table'])) {
      $table = $_GET['table'];
      //echo "La table : " . $table;
    }

    

      

      // identifier votre BDD
      $database = "projetweb";

      // identifier votre serveur
      $db_handle = mysqli_connect('localhost','root','');
      //faire la connexion
      $db_found = mysqli_select_db($db_handle, $database);

      $sql = "";
      $sql = "SELECT * FROM `$table` WHERE Clients_Id=$id";

      if($db_found){
            // code MySQL. $sql est basé sur le choix de l'utilisateur
            echo "<h1>Vos Rendez-vous</h1>";

             $result = mysqli_query($db_handle, $sql);
             echo "<table border =1>";
             echo '<tr>';
             echo "<th>"."Date"."</th>";
             echo "<th>"."Heure"."</th>";
             echo "<th>"."Agents"."</th>";
             echo '</tr>';

             while ($data = mysqli_fetch_assoc($result)) {

                   $sql2 = "";
                   $temp=$data['Agents_Id'];
                   $sql2 = "SELECT * FROM `agents` WHERE id=$temp";

                   $result2 = mysqli_query($db_handle, $sql2);
                   $data2 = mysqli_fetch_assoc($result2);

                   echo '< table border ="1">';
                   echo '<tr>';
                   echo "<td>". $data['date'] . "</td>";
                   echo "<td>". $data['heure']. "</td>";
                   echo "<td>". $data2['Prenom']." ". $data2['nomAgent']."</td>";
                   echo '</tr>';
             }
             echo "</table>";
      }
      else{
            echo "<br> database not found";
      }
      //fermer la co
      mysqli_close($db_handle);
?>
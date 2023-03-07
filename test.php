<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire de contact</title>
    <link href="communiquer.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body>
   
    <div class="contactez-nous">
    <center><h1>Communiquer avec l'agent</h1>
      <p>Veuillez remplir le formulaire ci-dessous afin de contacter l'agent immobilier</p>
    <form method="post" action="test2.php">
<div>
      <label for="nom">Nom de Famille :</label>
      <input type="text" id="nom" name="nom" required>
</div>
<div>
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required>
    </div>
    <div>
<label for="telephone">Votre numéro de télephone</label>
<input type="telephone" id="telephone" name="telephone" required>
</div>
<div>
<label for="sujet">Quel est le sujet de votre message ?</label>
<select name="sujet" id="sujet" required>
<option value="" disabled selected hidden> </option>
<option value="probleme-compte">Visite appartement/maison</option>
<option value="question-produit">Question à propos d’un bien</option>
<option value="suivi-commande">Conseil</option>
<option value="autre">Autre...</option>
</select>
</div>
<div>
<label for="message">Votre message </label>
<textarea id="message" name="message" required></textarea>
</div>

<div>
    <input type="submit" value="Envoyer">
    </form></div>
  </div>


  </body>
</html>







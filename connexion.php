<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="tout_parcourir.css" rel="stylesheet" type="text/css"/>

  <title>InfoCo</title>
</head>
    <body>
        <!-- En tête d'Eva -->
        <?php include('Menu.php'); ?>

        <table class="table2" border="2">
          <form action="traitementConnexion.php" method="post">

            <tr>
              <td>
                Adresse mail
              </td>
              <td>
                <input type="text" name="mail">
              </td>
            </tr>
            <tr>
              <td>
                Mot de Passe
              </td>
              <td>
                <input type="password" name="mdp">
              </td>
            </tr>
            </tr>
            <tr>
              <td>Confirmer Mot de Passe</td>
              <td>
                <input type="password" name="motDePasse">
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <input class="bouttonFormulaire" type="submit" name="submit" value="Valider">
              </td>
            </tr>
          </form>
        </table>


        <div class="footer">
          <div class="colonne1">
            <h4>CONTACT</h4>
            <a href="#">Numéro</a>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">E-mail</a>

          </div>
          <div class="colonne2">
            <h4>NEWSLETTER</h4>
            <form>
              <input type="email" placeholder="Your Email Adress"required>
              <br>
              <button type="submit">SUBSCRIBE NOW</button>
            </form>
          </div>
          <div class="colonne3">
            <h4>NOUS TROUVER</h4>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10506.347611780462!2d2.3194224405815005!3d48.827942868550615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cc2b900d7b8bfb%3A0x411bbf6ab575f1af!2sBeemmo%20-%20agence%20immobili%C3%A8re%20Paris!5e0!3m2!1sfr!2sfr!4v1675626245469!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      <!-- pour inclure le footer --> 
      <?php include('footer.php'); ?>
      
    </body>
</html>
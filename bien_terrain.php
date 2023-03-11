<?php
//vérification
if(!isset($_GET["id"]) || empty($_GET["id"])){
	// pas d'id
	header("Location: biens_terrain.php");
	exit;
}

// récup de l'id
$id = $_GET["id"];

try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8', 'root', 'root');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// recup de la maison + requete
$sql ="SELECT * FROM `immo_terrain` WHERE `id` = :id";

$requete = $mysqlClient->prepare($sql);
$requete->bindValue(":id",$id, PDO::PARAM_INT);

$requete->execute();

$maison = $requete->fetch();

// article vide?
if(!$maison){
	// pas de maison
	http_response_code(404);
	echo "Maison indisponible";
	exit;
}

$titre=strip_tags($maison["nom"]);

#include -> les autres pages

?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="theme_bien.css" rel="stylesheet" type="text/css"/>
	<title><?php echo $titre ?></title>
</head>

<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("custom-slider");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
</script>

<!-- pour inclure le menu --> 
<?php include('menu.php'); ?>

<br> <br> <br> <br>

<maison>
	<div class=maison>
	
		<div class="prix">
			<h1> £ <?php echo $maison["prix"] ?></h1>
		</div>

		<br>
		<div class="titre">
			<h1><?php echo $maison["nom"] ?></h1>
			<h3><?php echo $maison["adresse"] ?></h3>
		</div>

		<p><br /></p>
		<p><br /></p>

		<div class="slide-container">
      		<div class="custom-slider fade">
        		<img class="slide-img" src="maisons_du_projet/terrain<?php echo $maison["id"] ?>_1.png">
      		</div>
      		<div class="custom-slider fade">
        		<img class="slide-img" src="maisons_du_projet/terrain<?php echo $maison["id"] ?>_2.png">
      		</div>
      		<div class="custom-slider fade">
        		<img class="slide-img" src="maisons_du_projet/terrain<?php echo $maison["id"] ?>_3.png">
      		</div>
      		<div class="custom-slider fade">
      			<img class="slide-img" src="maisons_du_projet/terrain<?php echo $maison["id"] ?>_4.png">
      		</div>
      		<div class="custom-slider fade">
      			<img class="slide-img" src="maisons_du_projet/terrain<?php echo $maison["id"] ?>_5.png">
      		</div>
      		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      		<a class="next" onclick="plusSlides(1)">&#10095;</a>
    	</div>
		
		<div class="info_logo">
			<div class=image><img src="maison.png" alt="Maison" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["type"] ?> </p></div>
			<div class=image><img src="metre.png" alt="Metre" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["dimension"] ?> m2 </p></div>
			<div class=image><img src="surface.png" alt="Surface" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["surface"] ?> Hectares </p> <br> </div>
		</div>

		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		<p><br /></p>

		<div class="info_logo">
			<div class=image><img src="lit.png" alt="Lit" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["chambre"] ?> </p> </div>
			<div class=image><img src="toilette.png" alt="Toilette" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["toilette"] ?> </p> </div>
			<div class=image><img src="bain.png" alt="Bain" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["salle_de_bain"] ?> </p> </div>
			<div class=image><img src="cuisine.png" alt="Cuisine" height="30" width="30"></div>
			<div class=texte><p> <?php echo $maison["cuisine"] ?> </p> <br></div>
			<div class=image><img src="canape2.png" alt="Canape" height="25" width="35"></div>	
			<div class=texte><p> <?php echo $maison["salon"] ?> </p> <br></div>
		</div>

		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		<p><br /></p>

		<div class="bouton_test">
			<h4><a href="terrain.php">Agent Immobilier</a></h4>
		</div>

		<div class="bouton_test">
		<?php if ($maison["pdf"]==1) { ?>
			<h4><a href="maisons_du_projet/terrain<?php echo $maison["id"] ?>.pdf">Voir le PDF</a></h4>
		<?php } ?>
		</div>

		<div class="bouton_test">
		<?php if ($maison["video"]==1) { ?>
			<h4><a href="maisons_du_projet/maison2.mp4"> Voir la video </a></h4>
		<?php } ?>
		</div>

		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		
		<div class="info">
			<h2> Caractéristiques principales </h2>
			<br>
			
			<p> <?php echo $maison["caracteristique_principale"] ?> </p>
		</div>

		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
    
		<div class="Apropos">
			<h2> À propos de ce bien </h2>
			<br>
			<p> <?php echo $maison["a_propos"] ?> </p>
		</div>
	</div>
</maison>

<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>


<?php

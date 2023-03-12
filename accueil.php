
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil Omnes Immobilier</title>
	<link rel="stylesheet" href="style.css">
	<link href="tout_parcourir.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<h2 class="demoDate"></h2>
	<script src="app.js" type="text/javascript"></script>
	
<?php include('menu.php'); ?>

	<div class="centre">
		<p>Chez <span class="titre">BEE IMMOBILIER</span>, vous pourrez butiner les appartements dont vous revez !</p>	
		<div id="logo">
	<img src="logo_bee.gif" />
	</div>
		
	</div>
	 
    <div class="presentation">
      <p>Bee Immobilier est une agence immobilière de renom qui se consacre à aider les gens à trouver le logement de leurs rêves. Avec une équipe expérimentée et dévouée, nous offrons un service personnalisé à chaque client pour répondre à leurs besoins uniques. Nous sommes fiers de notre capacité à comprendre les attentes de nos clients et à les satisfaire grâce à notre vaste connaissance du marché immobilier local.</p>
      <p>Notre agence propose une grande sélection de propriétés, allant des appartements aux maisons individuelles en passant par les immeubles de rapport. Nous travaillons avec diligence pour trouver le bien idéal pour nos clients en fonction de leur budget, de leur emplacement préféré et de leurs exigences en matière de caractéristiques de la propriété.</p>
      
    </div>


	<h2>EVENEMENT DE LA SEMAINE</h2>

<div class="container">
      <div class="left-section">
        <div id="evenement">
		<br>
		
		<p>il vous reste....</p>	
		<br>

	
	<div id="countdown">
	<script type="text/javascript">
		var targetDate = new Date("April 1, 2023 00:00:00").getTime();

    // Actualiser le compte à rebours toutes les 1 secondes
    setInterval(function() {

      // Obtenir la date et l'heure actuelles
      var currentDate = new Date().getTime();

      // Trouver la différence entre les deux dates
      var difference = targetDate - currentDate;

      // Calculer le nombre de jours, heures, minutes et secondes restants
      var days = Math.floor(difference / (1000 * 60 * 60 * 24));
      var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((difference % (1000 * 60)) / 1000);

      // Afficher le compte à rebours dans le div
      document.getElementById("countdown").innerHTML = days + " jours " + hours + " heures " + minutes + " minutes " + seconds + " secondes ";

      // Si le compte à rebours est terminé, afficher "Temps écoulé"
      if (difference < 0) {
        document.getElementById("countdown").innerHTML = "Temps écoulé";
      }
    }, 1000);
		
	</script></div>
	<p>...Pour participer au grand tirage au sort pour tenter de gagner</p>
		<h1>15%</h1>

		<p>Sur toute acquisition d'un logement équipé d'une ruche</p>
		<br>
</div>
      </div>
      <div class="right-section">
        <h3>Séminaire sur les abeilles</h3> 
        <p>Venez nous rencontrer ce lundi à partir de </p>  
        <h3>10:00</h3>
        <p>chez nous pour découvrir la méthode de fabrication du miel ! </p> 

         </div>
    </div>




 <div class="introcarousel">
	
	<br>
	<h2>LES NOUVEAUTES DE LA SEMAINE</h2>
	<br>
</div>


 <div class="carousel">
      <div class="slide active-slide">
        <img src="maisons_du_projet/maison1_1.png" alt="Image 1">
      </div>
      <div class="slide">
        <img src="maisons_du_projet/maison2_1.png" alt="Image 2">
      </div>
      <div class="slide">
        <img src="maisons_du_projet/maison3_1.png" alt="Image 3">
      </div>
    </div>

    <script>
      const slides = document.querySelectorAll('.slide');
      let currentSlide = 0;
      let slideInterval = setInterval(nextSlide, 2000);

      function nextSlide() {
        slides[currentSlide].classList.remove('active-slide');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active-slide');
      }
    </script>


<!-- pour inclure le footer --> 
<?php include('footer.php'); ?>


</body>

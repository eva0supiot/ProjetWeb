<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie de carte bancaire</title>
	<style>
		html{
			background: black;

		}
	
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="number"], select {
			padding: 5px;
			margin-bottom: 10px;
			width: 100%;
			border-radius: 5px;
			border: 1px solid #ccc;
			background: none;
			border-color:#34495e ;

		}
		input[type="submit"] {
			padding: 10px;
			background-color: gold;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-left: 1000px;
		}
.chip {
  position: absolute;
  top: 35%;
  left: 5%;
  height: 23%;
}



.visa {
  position: absolute;
  bottom: 5%;
  right: 5%;
  height: 30%;
}
.arrow {
  position: absolute;
  top: 80%;
  left: 5%;
  width: 0; 
  height: 0; 
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent; 
  border-right:17px solid white; 
}


		.card-container {
  background: #34495e;
  border-radius: 20px;
  width: 100%;
  max-width: 600px;
  position: relative;
  box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.1); 
  border-bottom: 6px solid #2c3e50;
  border-right: 6px solid #2c3e50;
  margin-left: 350px;
  margin-top: 100px;
}
.card-name {
  top: 74%;
  font-size: 1.3rem;
  margin-left: 60px;

}

.card-number{
	margin-left: 150px;

}
.card-expire{
	margin-left: 150px;
	
}


	</style>
</head>
<body>
	 <div class="card-container">
	 	 <div class="card">
    
<img class="chip" src="wifi.gif"/>
<img class="visa"src="visa.gif"/>
	<form method="POST" action="ajouter_bdd.php">
		
		
		<div class="card-number">
		<input type="text" id="numero_carte" name="numero_carte"placeholder="0000 0000 0000 0000" required></div>
		
		<div class="arrow"></div>
<div class="card-expire">

		<select id="mois_exp" name="mois_exp" required>
			<option value="">Mois</option>
			<option value="01">Janvier</option>
			<option value="02">Février</option>
			<option value="03">Mars</option>
			<option value="04">Avril</option>
			<option value="05">Mai</option>
			<option value="06">Juin</option>
			<option value="07">Juillet</option>
			<option value="08">Août</option>
			<option value="09">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Décembre</option>
		</select>
		<select id="annee_exp" name="annee_exp" required>
			<option value="">Année</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>


			</select>
		
		
		<input type="number" id="cvv" name="cvv"placeholder="XXX" required></div>
		<div class="card-name">
		<input type="text" id="nom_carte" name="nom_carte" placeholder="Prenom Nom" required></div>
	
	</form></div></div>
	<br>
		<input type="submit" value="Valider">
</body>
</html>
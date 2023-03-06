<?php

$login=isset($_POST["identifiant"])? $_POST["identifiant"]: "";
$pass=isset($_POST["passw"])? $_POST["passw"]: "";

//associative array: utilisateur => mot de passe
$users=array("toto" => "totomdp","titi" => "titimdp", "tutu" => "123tutu123");

//verifier si $login est dans le tableau
$found=false;
foreach ($users as $key => $value) {
	if($key == $login)
		{$found = true;
			break;
		}
	}

		//si l'utilisateur est validé, verifier son mot de passe
		$connexion = false;
		if($found)
		{
			for($i=0; $i<count($users); $i++){
				if($users[$login] == $pass)
				{$connexion=true;
					break;
				}
			}
		}

//message
if(!$found)
{
echo "Connexion refusee.";
} 
else{if($connexion){
	echo "Connexion validée.";
}
else{
	echo "Connexion pas validée";
}
}

?>
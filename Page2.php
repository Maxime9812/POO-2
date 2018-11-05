<style>
	
	b
	{
		font-size: 18;
		
	}


</style>


<?php

// Appel des fichiers requis
require 'Personnage.php';
require 'Mage.php';
require 'Guerrier.php';
require 'Viking.php';
require 'Amazon.php';
require 'Prêtre.php';

// Variable pour le nombre de tour
$cunter 			= 1;


// instantation des personnages
$Combattant2 	= new Guerrier("Hache", 210, "Peau de loup", 7, ($_POST['nom1']), 100,"Guerrier", 10);
$Combattant1 	= new Prêtre("baton", 200, "robe", 6, ($_POST['nom2']),100,"Prêtre", 24);



// Creation de la variable contenent les point de vie des personnages
$vie1 = $Combattant1 -> getVie();
$vie2 = $Combattant2 -> getVie();


// Creation de la variable contenent le nom des personnages
$Nom1 = $Combattant1 -> getName();
$Nom2 = $Combattant2 -> getName();



// Variable pour définir qui commence le combat aléatoirement
$turn = rand(0,1);


// Boucle du combat
while ($vie1 > 0 && $vie2 > 0) {

	if ($turn == 0) {

		echo "<br><br>---------- TOUR " . $cunter . "----------<br><br>";
		echo "Au tour de <b>" . $Nom1 ."</b>.<br>";

		$Combattant1 -> attaquer($Combattant2);

		$vie1 = $Combattant1 -> getVie();
		$vie2 = $Combattant2 -> getVie();

		$cunter++;
		$turn++;

		if ($vie1 <=0 || $vie2 <=0) {

			echo "<br><br><b>".$Nom2."</b> a perdu !" ;
			
			break;
		}
	}

	if($turn == 1){

		echo "<br><br>---------- TOUR " . $cunter . "----------<br><br>";
		echo "Au tour de <b>" . $Nom2 ."</b>.<br>";

		$Combattant2 -> attaquer($Combattant1);

		$vie1 = $Combattant1 -> getVie();
		$vie2 = $Combattant2 -> getVie();

		$turn--;
		$cunter++;

		if ($vie1 <=0 || $vie2 <=0) {

			echo "<br><br><b>".$Nom1."</b> a perdu !" ;

			break;
		}
	}
}

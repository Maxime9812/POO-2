<?php

// creation de la classe Guerrier avec commme parent 'Personnage'
class Amazon extends Personnage{

// création des attributs propre à la classe
protected $hasCheval;
protected $precision;

//fonction __construct par rapport à sont parent
	public function __construct($m_arme, $m_vie, $m_tenue, $m_force, $m_name,$m_classe, $m_intel, $m_hasCheval, $m_precision){
      	parent::__construct($m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_classe, $m_intel);
        
	    $this->setCheval($m_hasCheval);
	    $this->setPrecision($m_precision);
    }

//création de la fonction attaquer qui est abstract dans Personnage
	public function attaquer($cible){

    	$random = rand(0,2);

  			if($random == 0){

			   echo  $this->name . " lance un regard ténebreux <br>";
			   echo "<b>". $cible->name. "</b> perd <b>2</b> de force";

			   $this->force -= 2;

 			}
		 	elseif ($this->arme == "arc") {

		 		$cible->vie -= $this->precision *1.5;

    	 		echo "<br><b>" . $this->name . "</b>" . " balance son arc à la figure de <b>" . $cible->name ."</b> et lui inflige <b>" . $this->force *  10 ."</b> points de dégats </b><br>";
				echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";
		 	}

		  	else {

		  		$cible->vie -= $this->force *1.5;
		  		
    	 		echo "<br><b>" . $this->name . "</b>" . " fou une claque sa mère à <b>" . $cible->name ."</b> et lui inflige <b>" . $this->force *  10 ."</b> points de dégats </b><br>";
				echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

  			}

	}

//Création du getter Cheval propre à la classe
	public function getCheval(){
		return $this->hasCheval;
	}

//Création du getter Precision propre à la classe
	public function getPrecision(){
		return $this->precision;
	}


//Création du setter Cheval propre à la classe
	public function setCheval($m_hasCheval){

		if($m_hasCheval == null || $m_hasCheval == false){

			echo "<br> tu ne possede pas de cheval, ma soeur";
		}

		elseif ($m_hasCheval == true){

			$this->hasCheval = $m_hasCheval;

			echo "Tu as un cheval dans ta besace";
		}

	}


//Création du setter Precision propre à la classe
	public function setPrecision($m_precision){

		if($m_precision == null){

			echo "tu ne possede aucune précision, mon chere";
		}
		else{

			$this->precision = $m_precision;

			echo "<br> Stat Précision :  <b>" . $m_precision . "</b><br>";
		}
	}
}

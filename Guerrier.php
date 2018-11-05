<?php

// creation de la classe Guerrier avec commme parent 'Personnage'
class Guerrier extends Personnage{

//Nouvelle attribut privé
	private $_endurance;

//fonction __construct par rapport à sont parent
	public function __construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_endurance, $m_classe, $m_intel){

		parent::__construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_classe, $m_intel);
		$this->setEndurance($m_endurance);
		
    }

//création de la fonction attaquer qui est abstract dans 'Personnage'
	public function attaquer($cible){
			$random = rand(0,100);


		
		if ($random >=60 && $this->_endurance >= 10){

			$this->force += 2;

			$this->_endurance -= 10;

			echo "<br><b>".$this->name."</b> lance cris de guerre, sa force augmente de <b>2</b>.<br>";
			echo "<b>".$this->name."</b> à maintenant <b>".$this->force. "</b> de force.";

		}
		elseif ($random <=60 && $this->_endurance >= 30){

			$cible->vie -= $this->force *2;

			$this->_endurance -= 40;

			echo "<br><b>".$this->name."</b>  lance charge sur <b>".$cible->name."</b> et lui a infliger <b>". $this->force *1.5."</b> points de dégats.<br>";
			echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}
		else {

			$cible->vie -= $this->force;

		echo "<br><b>".$this->name."</b> frappe sur <b>".$cible->name."</b> et lui a infliger <b>". $this->force."</b> points de dégats.<br>";
		echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}
	}

//Création du getter Endurance propre à la classe
	public function getEndurance(){

		return $this->$_endurance;

	}

//Création du setter Endurance propre à la classe
	public function setEndurance($m_endurance){

		if ($m_endurance == null) {

			echo "tu n'as pas d'endurance";

		}

		if ($m_endurance < 0) {

			echo "tu ne peu pas avoir moins que 0 endurance";
		}

		else{

			$this->_endurance=$m_endurance;

			echo "Endurance : <b>" . $this->_endurance . "</b><br>";
		}
	
	}

}
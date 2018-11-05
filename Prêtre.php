<?php

// creation de la classe Mage avec commme parent 'Personnage'
class Prêtre extends Personnage{

//Nouvelle attribut privé
	private $_lumière;

//fonction __construct par rapport à sont parent
	public function __construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_lumière,$m_classe, $m_intel){

		parent::__construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_classe, $m_intel);
		$this->setLumiere($m_lumière);
		
    }

//création de la fonction attaquer qui est abstract dans 'Personnage'
	public function attaquer($cible){
		$random = rand(0,100);
		
		if ($random <=30 && $this->_lumière >= 15) {

			$this->vie += $this->intel * 2;

			$this->_lumière -= 15;

			echo "<br><b>".$this->name."</b> fais une prière et ce soigne de <b>" . $this->intel *2 ."</b> HP.<br>";
			echo "<b>".$this->name."</b> à maintenant <b>".$this->vie. "</b> HP.";

		}

		elseif ($random >=30 && $this->_lumière >= 20) {

			$cible->vie -= $this->intel * 2.5;

			$this->_lumière -= 20;

			echo "<br><b>".$this->name."</b> lance horion sacré sur <b>".$cible->name."</b> et lui a infliger <b>". $this->intel *2.5."</b> points de dégats.<br>";
			echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}

		else{

			$cible->vie -= $this->force;

			echo "<br><b>".$this->name."</b> frappe sur <b>".$cible->name."</b> et lui a infliger <b>". $this->force."</b> points de dégats.<br>";
			echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}
	}

//Création du getter Lumière propre à la classe
	public function getLumiere(){

		return $this->$_lumière;

	}

//Création du setter Lumière propre à la classe
	public function setLumiere($m_lumière){

		if ($m_lumière == null) {

			echo "tu n'as pas de points de lumière";

		}

		if ($m_lumière < 0) {

			echo "tu ne peux pas avoir moins de 0 points de lumière";
		}

		else{

			$this->_lumière=$m_lumière;

			echo "Points de lumière : <b>" . $this->_lumière . "</b><br>";
		}
	
	}

}
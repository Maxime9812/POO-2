<?php

// creation de la classe Mage avec commme parent 'Personnage'
class Mage extends Personnage{

//Nouvelle attribut privé
	private $_mana;

//fonction __construct par rapport à sont parent
	public function __construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_mana,$m_classe, $m_intel){

		parent::__construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_classe, $m_intel);
		$this->setMana($m_mana);
		
    }

//création de la fonction attaquer qui est abstract dans 'Personnage'
	public function attaquer($cible){
		$random = rand(0,100);

		if ($random >= 30 && $this->_mana >= 20){

			$cible->vie -= $this->intel *1.5;

			$this->_mana -= 20;

			echo "<br><b>".$this->name."</b> à lancé une boule de feu sur <b>".$cible->name."</b> et lui a infliger <b>". $this->intel *1.5."</b> points de dégats.<br>";
			echo "<br<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}

		elseif ($random <= 30 && $this->_mana >= 40 ) {
			
			$cible->vie -= $this->intel *2.5;

			$this->_mana -= 40;

			echo "<br><b>".$this->name."</b> à lancé mur de feu sur <b>".$cible->name."</b> et lui a infliger <b>". $this->intel *1.5."</b> points de dégats.<br>";
			echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}

		else{

			$cible->vie -= $this->force;

			echo "<br><b>".$this->name."</b> frappe sur <b>".$cible->name."</b> et lui a infliger <b>". $this->force."</b> points de dégats.<br>";
			echo "<b>".$cible->name."</b> n'a plus que <b>".$cible->vie. "</b> HP.";

		}
	}

//Création du getter Mana propre à la classe
	public function getMana(){

		return $this->$_mana;

	}

//Création du setter Mana propre à la classe
	public function setMana($m_mana){

		if ($m_mana == null) {

			echo "tu n'as pas de mana";

		}

		if ($m_mana < 0) {

			echo "tu ne peu pas avoir moins que 0 mana";
		}

		else{

			$this->_mana=$m_mana;

			echo "Mana : <b>" . $this->_mana . "</b><br>";
		}
	
	}

}
<?php

// Creation de la classe mère
abstract class Personnage {

// création des attributs

	protected $arme;
	protected $vie;
	protected $tenue;
	protected $force;
  	protected $name;
	protected $counter;
	protected $intel;
	protected $classe;

// création des methodes

// création du constructeur
    public function __construct( $m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_classe, $m_intel){

    	echo "<br><br>---------- NOUVEAU COMBATTANT ---------- <br><br>";

    	$this->setClasse($m_classe);
	    $this->setArme($m_arme);
	    $this->setVie($m_vie);
	    $this->setTenue($m_tenue);
	    $this->setForce($m_force);
		$this->setName($m_name);
		$this->setIntel($m_intel);

    }


// fonction attaquer
	abstract public function attaquer($cible);

		// Création des getters

// création du getter Name
	public function getName(){
		return $this->name;
	}

//  création getter Arme
	public function getArme(){

		return $this->arme;

	}

//  création getter Vie
	public function getVie(){

		return $this->vie;
	}


//  création getter Tenue
	public function getTenue(){

		return $this->tenue;
	}

//  création getter Classe
	public function getClasse(){

		return $this->classe;
	}

// creation du getter Intel
	public function getIntel(){	
		return $this->intel;

	}

		// Création des setters

// creation du setter Intel
	public function setIntel($m_intel){

		if($m_intel == null){

			echo "tu ne possede pas d'intelligence.<br>";
		}

		else{

			$this->intel = $m_intel;

			echo "Stat Intelligence :  <b>" . $m_intel . "</b><br>";
		}
	}
	

// creation du setter Classe
	public function setClasse($m_classe){

		if($m_classe == null){

			echo "tu ne possede pas de classe";
		}

		else{

			$this->classe = $m_classe;

			echo "Classe :  <b>" . $m_classe . "</b><br>";
		}
	}


// creation du setter Name
	public function setName($m_name){

		if($m_name == null){

			echo "tu ne possede pas de nom<br>";
		}

		else{

			$this->name = $m_name;

			echo "Nom : <b>" . $m_name . "</b><br>";
		}
	}


// creation du setter Arme
	public function setArme($m_arme){

		if($m_arme == null){

			echo "tu ne possede pas d'arme, mon chere";
		}

		else{

			$this->arme = $m_arme;

			echo "Arme : <b>" . $m_arme . " </b><br>";
		}

	}


// creation du setter Vie
	public function setVie($m_vie){

		if($m_vie == null){

			echo "tu ne possede pas de tenue, mon chere";
		}
		else{

			$this->vie = $m_vie;

			echo "HP : <b>" . $m_vie . " </b><br>";
		}

	}


// creation du setter Tenue
	public function setTenue($m_tenue){

		if($m_tenue == null){

			echo "tu ne possede pas de tenue, mon chere";
		}
		else{

			$this->tenue = $m_tenue;

			echo "Armure : <b>" . $m_tenue . " </b><br>";
		}

	}


// creation du setter Force
	public function setForce($m_force){

		if($m_force == null){

			echo "il te manque de la force";
		}
		else{

			$this->force = $m_force;

			echo "Stat Force : <b>" . $m_force . "</b><br>";
		}

	}
}

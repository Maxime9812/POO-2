<?php

// creation de la classe Viking avec commme parent 'Personnage'
class viking extends Personnage{


//fonction __construct par rapport à sont parent
  public function __construct($m_arme, $m_vie, $m_tenue, $m_force, $m_name,$m_classe, $m_intel){
      parent::__construct($m_arme, $m_vie, $m_tenue, $m_force, $m_name, $m_classe, $m_intel);

  }

//création de la fonction attaquer qui est abstract dans 'Personnage'
   public function attaquer($cible){

     $random = rand(0,100);

     if($random < 90 ){

    	 	$cible->vie -= $this->force *  1;

    	 	echo "<br><b>" . $this->name . "</b>" . " à infliger une attaque à la hâche à <b>" . $cible->name ."</b> et a infliger <b>" . $this->force *  1 ."</b> points de dégats </b><br>";
    	 	echo "<b>" . $cible->name . "</b>" . " n'a plus que  " . " <b>" .$cible->vie . "</b>" . " vie <br>";

      }
      else {

    	 	$cible->vie -= $this->force *  10;

    	 	echo "<br><b>" . $this->name . "</b>" . " utilise Tonerre de Thor  à <b>" . $cible->name ."</b> et a infliger <b>" . $this->force *  10 ."</b> points de dégats </b><br>";
    	 	echo "<b>" . $cible->name . "</b>" . " n'a plus que  " . " <b>" .$cible->vie . "</b>" . " vie <br>";

    	 }
     }
   }
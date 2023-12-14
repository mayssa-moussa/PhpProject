<?php
class Voiture {
private $imm,$marque,$modele,$capacite,$tarif,$disponible;
function __construct($imm="",$marque="",$modele="",$capacite=null,$tarif=null,$disponible=""){
	
    $this->imm=$imm;
    $this->marque=$marque;
    $this->modele=$modele;
    $this->capacite=$capacite;
    $this->tarif=$tarif;
    $this->disponible=$disponible;
}
public function getImm(){
	return $this->imm;
}

public function getMarque(){
	return $this->marque;
}

public function getModele(){
	return $this->modele;
}

public function getCapacite(){
	return $this->capacite;
}
public function getTarif(){
	return $this->tarif;
}
public function getDisponible(){
	return $this->disponible;
}
public function setMarque($marque){
        $this->marque = $marque;
    }
public function setModele($modele){
        $this->modele = $model;
    }
public function setImmatricule($imm){
        $this->imm=$imm;
    }

public function setCapcite($capacite){
        $this->capacite=$capacite;
    }

 public function setTarif($tarif){
        $this->tarif=$tarif;
    }
    public function setDisponible($disponible){
        $this->disponible=$disponible;
    }   	
}?>
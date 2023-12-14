<?php
class Images{
private $nom,$type,$taille,$bin;
function __construct($nom="",$type="",$taille=null,$bin=null){
	
    $this->nom=$nom;
    $this->type=$type;
    $this->taille=$taille;
    $this->bin=$bin;
}
public function getNom(){
	return $this->nom;
}

public function getType(){
	return $this->type;
}
public function getTaille(){
	return $this->taille;
}
public function getBin(){
	return $this->bin;
}
public function setNom($nom){
        $this->nom = $nom;
    }
public function setType($type){
        $this->type = $type;
    }

public function setTaille($taille){
        $this->taille=$taille;
    }

 public function setBin($bin){
        $this->bin=$bin;
    }		   
}
?>
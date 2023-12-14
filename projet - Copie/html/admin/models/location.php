<?php
ob_start();
class Location {
private $id_voiture,$id_client,$date_debut,$date_fin,$prix,$id_location;
function __construct($id_voiture=null,$id_client=null,$date_debut=null,$date_fin=null,$prix=null){
	
    $this->id_voiture=$id_voiture;
    $this->id_client=$id_client;
    $this->date_debut=$date_debut;
    $this->date_fin=$date_fin;
    $this->prix=$prix;

}

public function getId_voiture(){
	return $this->id_voiture;
}

public function getId_client(){
	return $this->id_client;
}
public function getDate_debut(){
	return $this->date_debut;
}
public function getDate_fin(){
	return $this->date_fin;
}
public function getPrix(){
    return $this->prix;
}
public function getId_location(){
    return $this->id_location;
}
public function setId_voiture($idv){
        $this->id_voiture = $idv;
    }
public function setId_client($idc){
        $this->id_client = $idc;
    }
 public function setDate_debut($dd){
        $this->date_debut=$dd;
    }
    public function setDate_fin($df){
        $this->date_fin=$df;
    } 
    public function setPrix($prix){
        $this->prix=$prix;
    }       	
}
ob_end_flush();
?>
<?php
class Client{
private $nom,$prenom,$age,$telephone,$email,$mot_2_passe,$id_client;
function __construct($nom="",$prenom="",$age=null,$telephone="",$email="",$mot_2_passe="",$id_client=""){
	
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->age=$age;
    $this->telephone=$telephone;
    $this->email=$email;
    $this->mot_2_passe=$mot_2_passe;
    $this->id_client=$id_client;

}
public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}
public function getAge(){
	return $this->age;
}
public function getTelephone(){
	return $this->telephone;
}
public function getEmail(){
	return $this->email;
}
public function getMot_2_passe(){
    return $this->mot_2_passe;
}
public function setNom($nom){
        $this->nom = $nom;
    }
public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setAge($age){
        $this->age = $age;
    }
public function setEmail($email){
        $this->email=$email;
    }

 public function setTelephone($tel){
        $this->telephone=$tel;
    }
public function setMot_2_passe($md){
        $this->mot_2_passe=$md;
    }		
    public function getId_client($id_client){
        $this->id_client=$id_client;
    }		   
}
?>
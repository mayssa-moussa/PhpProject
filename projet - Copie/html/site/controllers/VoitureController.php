<?php
include_once('../models/voiture.php');
include_once('../database/config.php');
class VoitureController extends Connexion{
function __construct() {
parent::__construct();
}
function insert(Voiture $v){
$query="insert into voiture(immatricule,marque,modele,capacite,tarif,disponible)values(?, ?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($v->getImm(),$v->getMarque(),$v->getModele(),$v->getCapacite(),$v->getTarif(),$v->getDisponible());
//var_dump($aryy);
return $res->execute($aryy);
}

function getVoiture($id){
    $query="SELECT * FROM voiture WHERE id_voiture = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idVoiture) {
$query = "delete from voiture where id_voiture=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idVoiture));
}
function liste(){
$query = "select * from voiture";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(Voiture $v)
{
$sql = "UPDATE voiture SET  tarif=?, disponible=? WHERE immatricule=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($v->getImm(),$v->getMarque(),$v->getModele(),$v->getCapacite(),$v->getTarif,$v->getDisponible()));
}
}
?>
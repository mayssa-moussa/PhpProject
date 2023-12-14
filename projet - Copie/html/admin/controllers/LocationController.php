<?php
ob_start();
include_once('../models/location.php') ;
include_once('../database/config.php');
class LocationController extends Connexion{
function __construct() {
parent::__construct();
}
function insert(Location $l){
    $query = "INSERT INTO location(id_voiture, id_client, date_debut, date_fin, prix) VALUES (?, ?, ?, ?, ?)";
    $res = $this->pdo->prepare($query);
    $aryy = array($l->getId_voiture(), $l->getId_client(), $l->getDate_debut(), $l->getDate_fin(), $l->getPrix());

    //echo "Données à insérer dans la table 'location': ";
    //print_r($aryy);

    if ($res->execute($aryy)) {
        echo "L'insertion dans la table 'location' a réussi.";
    } else {
        $errorInfo = $res->errorInfo();
        echo "Erreur lors de l'insertion dans la table 'location': " . $errorInfo[2];
    }
}

function getLocation($id){
    $query="SELECT * FROM location WHERE id_location = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idloc) {
$query = "delete from location where id_location=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idloc));
}
function liste(){
$query = "select * from location";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
public function modifier_location(location $l)
{
    $sql = "UPDATE location SET prix=? where id_voiture=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array(
        $l->getPrix(),
        $l->getId_voiture()
    ));
}
}
ob_end_flush();
?>
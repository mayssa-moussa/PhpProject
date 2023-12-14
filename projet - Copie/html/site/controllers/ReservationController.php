<?php
ob_start();
include_once('../models/reservation.php') ;
include_once('../database/config.php');
class ReservationController extends Connexion{
function __construct() {
parent::__construct();
}
function insert(Reservation $v){
    $query="insert into reservation(id_voiture,id_client,date_debut,date_fin,message)values(?, ?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($v->getId_voiture(),$v->getId_client(),$v->getDate_debut(),$v->getDate_fin(),$v->getMessage());
    //var_dump($aryy);
    return $res->execute($aryy);
    }
function getReservation($id){
    $query="select * from reservation WHERE id_reservation=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idRes) {
$query = "delete from reservation where id_reservation=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idRes));
}
function liste(){
$query = "select * from reservation";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
}
ob_end_flush();
?>
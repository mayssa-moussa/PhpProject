<?php
ob_start();
include_once('../models/reservation.php') ;
include_once('../database/config.php');
class ReservationController extends Connexion{
function __construct() {
parent::__construct();
}
function getReservation($id){
    $query="SELECT * FROM reservation WHERE id_reservation = ? ";
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
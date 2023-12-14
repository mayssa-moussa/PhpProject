<?php 
require_once('../models/client.php');
require_once('../database/config.php');
class AdministrateurController extends Connexion{
function __construct() {
parent::__construct();
}
function liste(){
    $query = "select * from administrateur";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
}
?>
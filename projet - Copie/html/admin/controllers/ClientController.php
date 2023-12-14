<?php 
require_once('../models/client.php');
require_once('../database/config.php');
class ClientController extends Connexion{
function __construct() {
parent::__construct();
}
function insert(Client $c){
$query="insert into client(nom,prenom,age,telephone,email,mot_2_passe)values(?, ?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getNom(),$c->getPrenom(),$c->getAge(),$c->getTelephone(),$c->getEmail(),$c->getMot_2_passe());
//var_dump($aryy);
return $res->execute($aryy);
}

function getClient($id){
    $query="SELECT * FROM client WHERE id_client = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idClient) {
$query = "delete from client where id_client=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idClient));
}
function liste(){
$query = "select * from client";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
public function modifier_user(Client $c)
{
    $sql = "UPDATE client SET nom=?, prenom=?, age=?, telephone=?, email=? where mot_2_passe=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array(
        $c->getNom(),
        $c->getPrenom(),
        $c->getAge(),
        $c->getTelephone(),
        $c->getEmail(),
        $c->getMot_2_passe()
    ));
}

}
?>
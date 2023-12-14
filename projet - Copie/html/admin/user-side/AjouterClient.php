<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../controllers/ClientController.php');
require_once('../models/client.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$mot_2_passe=$_POST['mot_2_passe'];
//echo $cin." ".$nom." ".$prenom." ".$email." ".$telephone;
$client = new Client($nom,$prenom,$age,$telephone,$email,$mot_2_passe);
$clientCtr = new ClientController();
$res = $clientCtr->insert($client);
if ($res === true) {
    echo 'Test';
    echo '<html><head>';
    echo '<script>';
    echo 'alert("Le client est inséré dans la table");';
    echo 'window.location.href = "ListeClient.php";';
    echo '</script>';
    echo '</head><body></body></html>';
}
?>

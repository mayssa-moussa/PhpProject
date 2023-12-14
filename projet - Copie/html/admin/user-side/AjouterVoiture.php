<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../controllers/VoitureController.php');
require_once('../models/voiture.php');
$imm = $_POST['immatricule'];
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$capacite = $_POST['capacite'];
$tarif = $_POST['tarif'];
$disponible=$_POST['disponible'];
$voiture = new Voiture( $imm,$marque,$modele,$capacite,$tarif,$disponible);
$voitureCtr = new VoitureController();
$res = $voitureCtr->insert($voiture);

if ($res === true) {
    echo 'Test';
    echo '<html><head>';
    echo '<script>';
    echo 'alert("La voiture est insérée dans la table");';
    echo 'window.location.href = "ListeVoitures.php";';
    echo '</script>';
    echo '</head><body></body></html>';
}
?>
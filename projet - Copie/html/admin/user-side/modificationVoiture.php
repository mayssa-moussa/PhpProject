<?php
ob_start();
require_once('../controllers/VoitureController.php');
require_once('../models/voiture.php');
$voitureCtr=new VoitureController();
$voiture=new Voiture();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mod'])) {
$voiture->setImmatricule($_POST['immatricule']);
$voiture->setMarque($_POST['marque']);
$voiture->setModele($_POST['modele']);
$voiture->setTarif($_POST['tarif']);
$voiture->setDisponible($_POST['disponible']);
}
$voitureCtr->modifier_voiture($voiture);
header('Location:ListeVoitures.php');
ob_end_flush();
?>
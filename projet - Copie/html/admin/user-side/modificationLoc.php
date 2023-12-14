<?php
ob_start();
require_once('../controllers/LocationController.php');
require_once('../models/location.php');
$locationCtr=new LocationController();
$location=new Location();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mod'])) {
$location->setDate_debut($_POST['date_debut']);
$location->setDate_fin($_POST['date_fin']);
$location->setId_voiture($_POST['id_voiture']);
$location->setId_client($_POST['id_client']);
$location->setPrix($_POST['prix']);
}
$locationCtr->modifier_location($location);
header('Location:ListeLocations.php');
ob_end_flush();
?>
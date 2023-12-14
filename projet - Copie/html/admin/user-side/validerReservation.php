<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../controllers/ReservationController.php');
require_once('../controllers/LocationController.php');
require_once('../models/location.php');
$reservationController = new ReservationController();
//print_r($_GET);
if (isset($_GET['id'])){
$id_reservation = $_GET['id'];
//echo "$id_reservation";
$reservation = $reservationController->getReservation($id_reservation);
//print_r($reservation);
if ($reservation) {
    $locationController = new LocationController();
        
    $locationData = array(
        //'id_location'=>null,
        'id_voiture' => $reservation['id_voiture'],
        'id_client' => $reservation['id_client'],
        'date_debut' => $reservation['date_debut'],
        'date_fin' => $reservation['date_fin'],
        'prix'=>0
    );
//print_r($locationData);    
$location = new Location();
$location->setId_voiture($locationData['id_voiture']);
$location->setId_client($locationData['id_client']);
$location->setDate_debut($locationData['date_debut']);
$location->setDate_fin($locationData['date_fin']);
$location->setPrix($locationData['prix']);
//print_r($location);
$locationController->insert($location);
$reservationController->delete($id_reservation);
    echo 'Test';
    echo '<html><head>';
    echo '<script>';
    echo 'alert("La réservation a été validée et ajoutée à la table location.");';
    echo 'window.location.href = "ListeReservation.php";';
    echo '</script>';
    echo '</head><body></body></html>';
    } }
?>
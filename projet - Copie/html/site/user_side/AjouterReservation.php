<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../controllers/ReservationController.php');
require_once('../models/reservation.php');
require_once('../controllers/ClientController.php');
// Validation et désinfection des entrées
$date_debut = ($_POST['date_debut']);
$date_fin = ($_POST['date_fin']);
$id_voiture =($_POST['voiture']);
$message = ($_POST['message']);
$id_client = $_SESSION['id_client'];
var_dump($date_debut,$date_fin,$id_voiture,$id_client,$message);
$reservation = new Reservation($id_voiture, $id_client, $date_debut, $date_fin, $message);
$reservationCtr = new ReservationController();
$res = $reservationCtr->insert($reservation);
var_dump($res);
if ($res === true) {

    echo 'Test';
    echo '<html><head>';
    echo '<script>';
    echo 'alert("Votre réservation a été envoyée avec succès");';
    echo 'window.location.href = "index.html";';
    echo '</script>';
    echo '</head><body></body></html>';
}
?>


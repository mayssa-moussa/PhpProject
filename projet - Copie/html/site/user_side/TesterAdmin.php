<?php
ob_start();
require_once('../controllers/AdministrateurController.php');
require_once('../models/administrateur.php');
$email = $_POST['email'];
$mot_2_passe = $_POST['md'];
$admin = new Administrateur($email, $mot_2_passe);
$adminCtr = new AdministrateurController();
$res = $adminCtr->liste();
$adminTrouve = false;
while ($l = $res->fetch()) {
    if ($email == $l[0] && $mot_2_passe == $l[1]) {
        $adminTrouve = true;
        break;
    }
}
//print_r($adminTrouve);


if ($adminTrouve) { 
    header('Location: ../../admin/user-side/index.html');
    ob_end_flush();
} else {
    echo'Test';
    echo '<html><head>';
    echo '<script>';
    echo 'alert("Vous n\'etes pas un administrateur !");';
    echo 'window.location.href = "loginAdmin.html";'; // Redirection vers la page de connexion
    echo '</script>';
    echo '</head><body></body></html>';
    ob_end_flush();
}
?>
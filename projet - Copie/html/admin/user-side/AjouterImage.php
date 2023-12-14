<?php
include_once("../database/config.php");
include_once("../controllers/ImagesController.php");
include_once("../models/images.php");
if(isset($_POST["valider"])){
    error_log('Le formulaire a été soumis.');
    $nomFichier = $_FILES['image']['name'];
    $typeFichier = $_FILES['image']['type'];
    $tailleFichier = $_FILES['image']['size'];
    $binFichier = file_get_contents($_FILES['image']['tmp_name']);
    $image = new Images($nomFichier, $typeFichier, $tailleFichier, $binFichier);
    echo "Nom du fichier : " . $image->getNom() . "<br/>";
    echo "Type du fichier : " . $image->getType() . "<br/>";
    echo "Taille du fichier : " . $image->getTaille() . " octets<br/>";
    //echo '<img src="data:image/png;base64,' . base64_encode($image->getBin()) . '" />';
    $imagesController = new ImagesController();
    $resultatInsertion = $imagesController->insertImage(
        $image->getNom(),
        $image->getType(),
        $image->getTaille(),
        $image->getBin()
    );
    if ($resultatInsertion) {
        echo 'Test';
        echo '<html><head>';
        echo '<script>';
        echo 'alert("image insérée dans la table");';
        echo 'window.location.href = "AjouterImage.html";';
        echo '</script>';
        echo '</head><body></body></html>';     
    
}
}
?>
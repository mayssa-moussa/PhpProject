<?php
require_once('../controllers/VoitureController.php');
$voitureCtr=new VoitureController();
$res=$voitureCtr->getVoiture($_GET['id']);
?>
<form name ='f1' method='post' action='modificationVoiture.php'>
<table border='1'>
	<tr>
<td>id</td>
<td><input type = "number" name = "id" readonly="readonly" value = "<?php echo $res['id_voiture'] ?>"/></td></tr>
<tr>    
<td>Immatricule</td>
<td><input type = "text" name = "immatricule" value = "<?php echo $res['immatricule'] ?>"/></td></tr>

<tr>
<td>Marquee</td>
<td><input type = "text" name = "marque" value = "<?php echo $res['marque'] ?>"/></td></tr>
<tr><td>Modele</td>
<td><input type = "text" name = "modele" value = "<?php echo $res['modele'] ?>"/></td></tr>
<tr>    
<td>Capacite</td>
<td><input type = "number" name = "capacite" value = "<?php echo $res['capacite'] ?>"/></td></tr>

<tr><td>Tarif</td>
<td><input type = "number" name = "tarif" value = "<?php echo $res['tarif'] ?>"/></td></tr>

<tr>    
<td>Disponible</td>
<td><input type = "text" name = "disponible" value = "<?php echo $res['disponible'] ?>"/></td></tr>

<tr>
	<td><input type = "submit" value= "modifier" name = "mod"/></td>
</tr>
</table></form>
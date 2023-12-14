<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$res=$clientCtr->getClient($_GET['id']);
?>
<form name ='f1' method='post' action='modification.php'>
<table border='1'>
	<tr>
<td>id</td>
<td><input type = "number" name = "id" readonly="readonly" value = "<?php echo $res['id_client'] ?>"/></td></tr>
<tr>
<td>Nom</td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nom'] ?>"/></td></tr>
<tr><td>Prenom</td>
<td><input type = "text" name = "prenom" value = "<?php echo $res['prenom'] ?>"/></td></tr>
<tr> 
<td>age</td>
<td><input type = "number" name = "age" value = "<?php echo $res['age'] ?>"/></td></tr>
<tr> 	   
<td>Telephone</td>
<td><input type = "text" name = "telephone" value = "<?php echo $res['telephone'] ?>"/></td></tr>

<tr><td>Email</td>
<td><input type = "text" name = "email" value = "<?php echo $res['email'] ?>"/></td></tr>

<tr>    
<td>Mot de passe</td>
<td><input type = "text" name = "mot_2_passe" value = "<?php echo $res['mot_2_passe'] ?>"/></td></tr>

<tr>
	<td><input type = "submit" value= "modifier" name = "mod"/></td>
</tr>
</table></form>
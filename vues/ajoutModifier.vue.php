<!DOCTYPE html>
<html>
<?php
include('../header.php');
?>
<body>
<table>
<tr class="colonne">
<td>Gestion des Evenements</td>
<td>Utilisateur</td>
<td>Liste des Evenements</td>
</tr>
</table>
<div class="container">
<div class="form-group form1">
<form >
      <input type="text" placeholder="Nom de l'evenement" name="text">
</form>
</div>
 
<div class="form">
<div>
    <h5>Date de début:</h5><input type="date"name="nom"/>
</div>
<div>
    <h5>Date de fin:</h5><input type="date"name="nom"/>
</div>
</div>
<br>
<h5>Photo de l'evenement</h5>
<div class="image">
<img src="" alt="">
</div>
<div class="envoi">
<input type="submit"value="Enrégistrer" id="envoi"/>
</div>
</div>
</body>
</html>
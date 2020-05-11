<!DOCTYPE html>
<html>
<?php
include('header.php');
?>
<body>
    <?php include('entete.php'); ?>
<div class="container">
<div class="form-group form1">
<form action="" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Nom de l'evenement" name="nom">
</div>
 
<div class="form">
<div class="date">
    <h5>Date de début:</h5><input type="date"name="date_debut"/>
</div>
<div>
    <h5>Date de fin:</h5><input type="date" name="date_fin"/>
</div>
</div><br>
<div>
    <input type="file" name="photo"/>
</div>
<br>
<h5>Description</h5>
<textarea name="description" class=" image">

</textarea>
<div class="envoi">
<input type="submit" value="Enrégistrer" id="envoi"/>
</div>
</form>
</div>
</body>
</html>
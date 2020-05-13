<!DOCTYPE html>
<html>
<?php
include('vues/header.php');
?>
<body>
    <?php include('vues/entete.php'); ?>
<div class="container">
<div class="w-25 form1">
<form action="" method="post" enctype="multipart/form-data">
      <input class="mt-2 form-control" type="text" name="id" hidden <?php $ajoutmodifier->nomEmpty($id);?>>
      <input class="mt-2 form-control" type="text" placeholder="Nom de l'evenement" name="nom" <?php $ajoutmodifier->valu($nom);?>>
</div>
 
<div class="form">
<div class="date">
    <h5 class="mt-2">Date de début:</h5><input class="mt-2 form-control" type="date"name="date_debut" <?php $ajoutmodifier->valu($date_debut);?>  >
</div>
<div>
    <h5 class="mt-2">Date de fin:</h5><input class="mt-2 form-control" type="date" name="date_fin" <?php $ajoutmodifier->valu($date_fin);?>>
</div>
</div><br>
<div>
    <input class="mt-2 form-control" type="text" name="photo" hidden <?php $ajoutmodifier->valu($photo);?> >
    <input class="mt-2 form-control" type="file" name="photo" <?php $ajoutmodifier->disable($photo);?> >
</div>
<br>
<h5>Description</h5>
<textarea class="form-control" name="description" class=" image">
<?php $ajoutmodifier->nomEmpty($description);?>
</textarea>
<div class="envoi">
<input class="btn btn-info mt-2" type="submit" value="Enrégistrer" id="envoi"/>
</div>
</form>
</div>
</body>
</html>
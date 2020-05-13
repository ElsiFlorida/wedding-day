
<!DOCTYPE html>
<html>
<?php
include('header.php');
?>
<body>
<?php
include('entete.php');
?>
<table class="table table-bordered table-striped">
<tr class="ligne">
<td>Nom</td>
<td>Description</td>
<td>Date debut</td>
<td>Date fin</td>
<td>Option</td>
</tr>
<?php
foreach ($event as $key) {
    ?>

<tr class="ligne">
<td>
<?php
echo $key['nom'];
?>
</td>

<td>
<?php
echo $key['description'];
?>
</td>

<td>
<?php
echo $key['dateDebut'];
?>
</td>

<td>
<?php
echo $key['dateFin'];
?>
</td>

<td>
<a class="btn btn-danger" href="?page=listeAdmin&suppr=<?php echo $key['id'];
?>">Supprimer</a>
<a class="btn btn-success" href="?page=ajoutmodifier&update=<?php echo $key['id'];
?>">Modifier</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
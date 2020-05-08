
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
<tr class="ligne">
<td>Nom</td>
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
echo $key['dateDebut'];
?>
</td>
<td>
<?php
echo $key['dateFin'];
?>
</td>
<td><a href="<?php echo $key['id'];
?>">Supprimer</a>
<a href="<?php echo $key['id'];
?>">Modifier</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
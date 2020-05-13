<!DOCTYPE html>
<html lang="en">
<?php
include("header.php");
?>
<body>
<div class="listbg">
      <a class=" btn btn-info text-light ml-5" href="index.php?page=accueil">Accueil</a>
  </div>
  <div class="row justify-content-around m-3">
<?php
    foreach ( $evenement as $key) {
?>
  <a style="display:block" href="index.php?page=single&id=<?php echo $key["id"]?>" class="listcontent col-md-3 m-1 p-1">
      <img src="<?php echo $key ['photo']?>"  class="listimg">
      <h5> <?php echo $key["nom"]?></h5>
      <!-- <h5> <?php //echo $key["datePub"]?></h5> -->
    </a> 
    <?php }?> 
    </div>
</body>
</html>
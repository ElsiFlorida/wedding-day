<!DOCTYPE html>
<html lang="en">
<?php
include("header.php");
?>
<body>
<?php
    foreach ( $evenement as $key) {
?>
  <div class="listbg">
      <a class=" bg-info text-light ml-5" href="#">Accueil</a>
  </div>
  <a href="index.php?page=single&id=<?php echo $key ["id"]?>" class="listcontent">
      <img src="<?php //echo $key ['']?>"  class="listimg">
      <h5> <?php echo $key ["nom"]?></h5>
      <h5> <?php echo $key ["datePub"]?></h5>
  </a> 
    <?php }?> 
</body>
</html>
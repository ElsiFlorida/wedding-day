<!DOCTYPE html>
<html>
<?php include('header.php');?>
    <body>
    <div class="cont container-fluid">
        <header class="row p-2" style="background-color:#ea7b7f">
            <a class="btn btn-info col-md-1" href="index.php">Accueil</a>
        </header>
        <a href="index.php?page=liste&lister=liste" class="btn m-2" style="border:1px solid black"><span class="fa fa-arrow-left mr-3"></span>Retour a la liste</a>
        <section class=" ev-image row bg-success">
            <img class="img_single" src="<?php echo $evenement['photo'];?>">
        </section>

        <ul class="row flex-column">
            <li><?php echo $evenement['nom'];?></li>
            <li><?php echo $evenement['dateDebut'];?></li>
            <li><?php echo $evenement['dateFin'];?></li>
        </ul>
        <p><?php echo $evenement['description'];?></p>

        <section>
        <h2 class="comment-title">Laisser un commentaire</h2>
        <form action="" method="post" class="form row">

          <div class="col-md-4">
             <input type="text" placeholder="Nom" name="nom" class="form-control mt-3">
             <input type="text" placeholder="Telephone" name="numero" class="form-control mt-3">
             <textarea class="form-control mt-3" name="contenu" placeholder="Message"></textarea>

             <input type="submit" class="form-control mt-3 w-25 btn btn-info">
          </div>

        </form>
        </section>
        
        <section class="mb-5">
        <h2 class="comment">Commentaires</h2>
            <?php
            foreach ($commentaire as $comment) {
                ?>
                <div class="comment-block p-2 mt-3">
                    <h6><b>Le <?php echo $comment['datePub'] ?> par <?php echo $comment['nom']; ?></b></h6>
                    <p><?php echo  $comment['contenu'] ?></p>
            </div>
            <?php
            }
            ?>
        </section>
    </div>
    </body>
</html>
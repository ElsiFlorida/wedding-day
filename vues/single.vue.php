<!DOCTYPE html>
<html>
<?php include('../header.php')?>
    <body>
    <div class="container-fluid">
        <header class="row p-2" style="background-color:#ea7b7f">
            <a class="btn btn-info col-md-1">Accueil</a>
        </header>
        <div class="btn m-2" style="border:1px solid black"><span class="fa fa-arrow-left mr-3"></span>Retour a la liste</div>
        <section class=" ev-image row bg-success">
            
        </section>

        <ul class="row flex-column">
            <li>Nom de l'evenement<?php //$evenement['nom'];?></li>
            <li>Date debut<?php //$evenement['debut'];?></li>
            <li>Date fin<?php //$evenement['fin'];?></li>
        </ul>
        <h2 class="comment-title">Laisser un commentaire</h2>
        <form class="form row">

          <div class="col-md-4">
             <input type="text" placeholder="Nom" class="form-control mt-3">
             <input type="text" placeholder="Prenom" class="form-control mt-3">
             <textarea class="form-control mt-3" placeholder="Message"></textarea>

             <input type="submit" class="form-control mt-3 w-25 btn btn-info">
          </div>

        </form>

        <section>
        <h2 class="comment">Commentaires</h2>
            <?php
            //foreach ($commentaire as $comment) {
                ?>
                <div class="comment-block p-2 mt-3">
                    <h5>Le <?php //echo $comment['dt'] ?> par <?php //echo $comment['nom'].' '.$comment['prenom']; ?></h5>
                    <p>ddddddddddddddcccccccccccc<br>dghdhgdhbfvhjbvfjbhgvjhvgjhbgvjhbvfghjbfvhj<?php //echo  $comment['contenue'] ?></p>
                <div>
            <?php
            //}
            ?>
        </section>
    </div>
    </body>
</html>
<!DOCTYPE html>
<html class="h-100">
        <?php include('vues/header.php')?>
    <body class="h-100">
    <?php include('vues/entete.php')?>
      <div class="container-fluid">
        <section style="border-bottom:3px solid black">
        <h1>Changer de mot de passe</h1>
            <form action="" method="post" class="row">
                <input type="text" name="new_pass" class="form-control col-md-4 m-3">
                <input type="submit" value="changer" class="form-control col-md-1 m-3">
            </form>
        </section>
        <div class="row">
           <section class="col-md-4" style="border-right:3px solid black">
           <h1>Ajouter un Admin</h1>
           <form action="" method="post" class="form whell">
                <input type="text" name="username" class=" form-control m-1">
                <input type="submit" class=" form-control m-1">
            </form>
           </section>

           <section class="col-md-8">
           <h1>Liste des admins</h1>
               <table class="table table-bordered  table-striped">
                   <thead>
                       <th>Username</th>
                       <th>Option</th>
                   </thead>
                   <tbody>
                   <?php foreach ($liste as $key) {
                       ?>
                       <tr class="">
                           <td class=""><?php echo $key['username'] ?></td>
                           <td class=""><a href="index.php?page=user&suppr=<?php echo $key['id'] ?>">X</a></td>
                       </tr>

                       <?php
                       }
                       ?>
                   </tbody>
               </table>
           </section>

        </div>
      </div>
    </body>
</html>
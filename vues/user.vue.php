<!DOCTYPE html>
<html class="h-100">
        <?php include('header.php')?>
    <body class="h-100">
      <div class="container-fluid">
        <section >
            <form action="" method="post" class="row">
                <input type="text" name="new_pass" class="flex-grow-1 m-3">
                <input type="text" name="old_pass" class="flex-grow-1 m-3">
                <input type="submit" value="changer" class="flex-grow-1 m-3">
            </form>
        </section>
        <div class="row">
           <section class="col-md-4">
           <form action="" method="post" class="form whell">
                <input type="text" name="username" class=" form-control m-1">
                <input type="submit" class=" form-control m-1">
            </form>
           </section>

           <section class="col-md-8">
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
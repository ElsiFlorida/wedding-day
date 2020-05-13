<?php
<<<<<<< HEAD
include_once('controleurs/user.controller.php');
$single=new user();
$single->start();
=======
if(!isset($_GET['page'])){
$_GET['page']='accueil';
}
include_once('controleurs/router.controller.php');
$router=new Router();
$router->request();
>>>>>>> test
?>
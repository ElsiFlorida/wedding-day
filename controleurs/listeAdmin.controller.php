<?php

class listeAdmin
{
   private $evenement;

function __construct() {
$base= new Db();
$db= $base-> connect();
$this->evenement= new evenement($db);
}
function start(){
    if(isset($_GET['liste'])){
        $event=$this->evenement->lister();
        include('vues/listeAdmin.vue.php');
    }
}
}
?>
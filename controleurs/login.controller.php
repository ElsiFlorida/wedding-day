<?php
class login{
   
    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new Admin($db);
    }
    function start(){
        if(isset($_POST["username"]) AND isset($_POST["password"])){
            $admi=$this->admin->isAdmin($_POST["username"],$_POST["password"]);
            if ($admi!=false){
    session_start();
    $_SESSION["id"]=$admi["id"];
                header("location:index.php?page=ajoutModifier");
            }
            else{
                header("location:index.php?page=connexion");
            }

        }
        include("vues.adminConnection.vue.php");
    }
}

?>
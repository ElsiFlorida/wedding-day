<?php

class user{
    private $admin;
    private $evenement;

    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new admin($db);
    }

    function start(){
            $liste=$this->admin->liste();
            if(isset($_POST['username'])) {
                $this->admin->creer($_POST['username'],'admin');
            }

            if(isset($_GET['suppr'])) {
                $this->admin->suppr($_GET['suppr']);
            }

            if(isset($_POST['new_pass']) AND isset($_POST['old_pass'])) {
                $this->admin->change($_POST['new_pass'],$_POST['old_pass']);
            }
            require('vues/user.vue.php');
    }
}
?>
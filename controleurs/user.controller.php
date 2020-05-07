<?php
include_once('../modeles/admin.modele.php');
class single{
    private $admin;
    private $evenement;

    function __construct(){
        $admin=new admin();
    }

    function start(){
            $list=$this->admin->adminListe();
            if(isset($_POST['username'])) {
                $this->admin->enregistrer($_POST['username'],'admin');
            }

            if(isset($_POST['newpass']) AND isset($_POST['oldpass'])) {
                $this->admin->change($_POST['newpass'],$_POST['oldpass']);
            }
            require('../vues/user.vue.php');
    }
}
?>
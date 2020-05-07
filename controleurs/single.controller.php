<?php
include_once('modeles/commentaire.model.php');
include_once('modeles/evenement.model.php');
class single{
    private $commentaire;
    private $evenement;
    function __construct(){
        $commentaire=new commentaire();
        $evenement=new evenement();
    }

    function start(){
        if(isset($_GET[id])){
            $evenement=$this->evenement->detail($_GET[id]);
            $commentaire=$this->commentaire->getAll($evenement['id']);
            if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['contenu'])) {
                $this->commentaire->inserer($evenement['id'],$_POST['nom'],$_POST['prenom'],$_POST['contenu']);
            }
            require('../vues/single.vue.php');
        }
    }
}
?>
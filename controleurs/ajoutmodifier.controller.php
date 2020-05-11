<?php
class ajoutmodifier{
    private $ajouter;
    function__construct() {
        $base= new Db();
        $db= $base-> connect();
        $this->ajouter= new Evenement($db);
        }
        function start(){
            if(isset($_POST['nom']) AND isset($_POST['dateDebut']) AND isset($_POST['dateFin'])){
                $ajouter=$this->ajouter->enregistrer($_POST['nom'],$_POST['dateDebut'],$_POST['dateFin']);
            } 
            else{
                header("location:index.php?page=ajoutModifier");
            }
            include('vues/ajoutModifier.vue.php');
        }
            
             
}

?>
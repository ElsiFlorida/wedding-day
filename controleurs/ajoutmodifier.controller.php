<?php
class ajoutmodifier{
    private $ajouter;
    function __construct() {
        $base= new Db();
        $db= $base->connect();
        $this->ajouter= new Evenement($db);
        }
        function start(){
            if(isset($_POST['nom']) AND  isset($_FILES['photo']) AND isset($_POST['description']) AND isset($_POST['date_debut']) AND isset($_POST['date_fin'])){

                if(isset($_POST['nom'])){

                }
                
                $chemin='imageEvent/'.$_POST['nom'].'image.jpg';
                $this->ajouter->enregistrer($_POST['nom'],$chemin,$_POST['description'],$_POST['date_debut'],$_POST['date_fin']);
                move_uploaded_file($_FILES['photo']['tmp_name'],'imageEvent/'.$_POST['nom'].'image.jpg');
            }

            include('vues/ajoutModifier.vue.php');
        }
            
             
}

?>
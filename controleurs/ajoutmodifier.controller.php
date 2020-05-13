<?php
class ajoutmodifier{
    private $ajouter;
    function __construct() {
        $base= new Db();
        $db= $base->connect();
        $this->ajouter= new Evenement($db);
        }

        function nomEmpty($arg){
            if ($arg!="") {
               echo $arg;
            } 
            
        }

        function valu($arg){
            if ($arg!="") {
               echo 'value="'.$arg.'"';
            } 
            
        }

        function disable($arg){
            
            if ($arg!="") {
                echo 'disabled';
             } 

        }

        function start(){

            $ajoutmodifier=$this;

            $id="";
            $nom="";
            $date_debut="";
            $date_fin="";
            $photo="";
            $description="";
            
            if(isset($_GET['update'])){
                
                $mod=$this->ajouter->detail($_GET['update']);

                $id=$_GET['update'];
                $nom=$mod['nom'];
                $date_debut=$mod['dateDebut'];
                $date_fin=$mod['dateFin'];
                $photo=$mod['photo'];
                $description=$mod['description'];
            }
            if(isset($_POST['nom']) AND  isset($_POST['photo']) AND isset($_POST['description']) AND isset($_POST['date_debut']) AND isset($_POST['date_fin'])){

                $this->ajouter->modifier($id,$_POST['nom'],$_POST['photo'],$_POST['description'],$_POST['date_debut'],$_POST['date_fin']);

            }

            if(isset($_POST['nom']) AND  isset($_FILES['photo']) AND isset($_POST['description']) AND isset($_POST['date_debut']) AND isset($_POST['date_fin'])){
                $chemin='imageEvent/'.$_POST['nom'].'image.jpg';
                $this->ajouter->enregistrer($_POST['nom'],$chemin,$_POST['description'],$_POST['date_debut'],$_POST['date_fin']);
                move_uploaded_file($_FILES['photo']['tmp_name'],'imageEvent/'.trim($_POST['nom']).'image.jpg');
            }

            include('vues/ajoutModifier.vue.php');
        }
            
             
}

?>
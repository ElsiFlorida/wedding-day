<?php
require('modeles/Db.model.php');
require('modeles/Db.model.php');
function loadcontroller($class){
    require_once($class.'.controller.php');
}
spl_autoload_register('loadcontroller');
class Router{
    private $single;
    private $liste;
    private $connexion;
    private $user;
    private $ajoutmod;
    private $listAdmin;

     function __construct(){
        $this->single=new single();
        $this->liste=new liste();
        //$this->connexion=new login();
        $this->user=new user();
        //$this->ajoutmod=new ajoutmod();
        //$this->listAdmin=new listeAdmin();
     }

     function request(){
         if(isset($_GET['page'])){

            switch ($_GET['page']) {
                    case 'accueil':
                    $accueil->start();
                    break;
                
                    case 'liste':
                        $this->liste->start();
                    break;

                    case 'single':
                        $this->single->start();
                    break;

                    case 'new-event':
                        $this->ajoutmod->start();
                    break;

                    case 'user':
                        $this->user->start();
                    break;

                    case 'connexion':
                        $this->connexion->start();
                        break;

                default:
                    echo 'Page non trouvee';
                break;
            }
         }

         
     }
 }
?>
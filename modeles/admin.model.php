<?php


class Admin{
    private $base;
   function __construct($db){
    $this->base=$db;
}
function isAdmin($username,$Password){
    $verif=$this->base->prepare("SELECT * FROM administrateur WHERE username=:idt AND password=:pass");
    $verif->execute(array(
        "idt"=>$username,
        "pass"=>sha1($Password),
    ));
    $admi=$verif->fetch();
    print_r($admi);
    if(count($admi)!=0){
        return $admi;
    }
    else{ 
        return false;
    }
}
function modifPass($newpass,$id){
    $modif=$this->base->prepare("UPDATE administrateur SET password=:newpass WHERE id=:id");
    $modif->execute(array(
        "newpass"=>sha1($newPass),
        "id"=>$id
    ));
}
function creer($username,$Password){
    $inserer=$this->base->prepare("INSERT INTO administrateur(username,password) VALUES(:usernameN,:passwordN)");
    $inserer->execute(array(
        "usernameN"=>$username,
        "passwordN"=>sha1($Password)
    ));
    function supprimer($id){
        $supri=$this->base->prepare("DELETE FROM administrateur WHERE id=:id");
    $supri->execute(array(
        "id"=>$id
    ));
    }
}

function liste(){
    $ls=$this->base->query("SELECT * FROM administrateur");
   return $ls->fetchAll();
   }
   
}
?>
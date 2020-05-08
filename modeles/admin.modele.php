<?php


class Admin{
    private $base;
   function __construct($db){
    $this->base=$db;
}
function isAdmin($username,$Password){
    $verif=$this->base->prepare("SELECT * FROM administrateur WHERE identifiant=:idt AND mot_de_passe=:pass");
    $verif->execute(array(
        "idt"=>$username,
        "pass"=>sha1($Password),
    ));
    $admi=$verif->fetch();
    if(count($admi)!=0){
        return $admi;

    }
    else{ 
        return false;
}
function modifPass($newpass,$id){
    $modif=$this->base->prepare("UPDATE administrateur SET mot_de_passe=:newpass WHERE identifiant=:id");
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
?>
<?php

  class commentaire{
      
    private $base;
    function __construct($db){
        $this->base=$db;
    }

      function getAll($id){
          $select= $this->base->prepare('SELECT * FROM commentaire WHERE eve_id=:id');
          $select->execute(array("id"=>$id));
          $commentaire=$select->fetchAll();
          return $commentaire;
      }

      function register($id,$nom,$prenom,$contenu){
        $inser= $this->base->prepare('INSERT INTO commentaire(eve_id,nom,numero,contenu) VALUES(:eve_id, :nom, :numero, :contenu');
        $inser->execute(array(
          'eve_id'=>$id,
          'nom'=>$nom,
          'numero'=>$prenom,
          'contenu'=>$contenu
        ));
      }
  }
?>
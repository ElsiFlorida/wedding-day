<?php
  include_once('Db.model.php');

  class commentaire{
      
      function __construct(){}

      function getAll($id){
          $select=$db->prepare('SELECT * FROM wedding WHERE eve_id=:id');
          $select->execute(array("id"=>$id));
          $commentaire=$select->fetchAll();
          return $commentaire;
      }

      function enregistrer($id,$nom,$prenom,$contenu){
        $inser=$db->prepare('INSERT INTO wedding(nom,prenom,message) VALUE(:nom,:prenom,:prenom) WHERE id=:id');
        $inser->execute(array(
          'nom'=>$nom,
          'prenom'=>$prenom,
          'message'=>$contenu,
          'id'=>$id
        ));
      }
  }
?>
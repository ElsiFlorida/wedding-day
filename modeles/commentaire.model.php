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
  }
?>
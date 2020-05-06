<?php
 class Db{
     private $bd;
     function __construct(){
            $this->bd=new PDO('mysql:host=localhost;dbname=weddingday','root','');
     }

     function connect(){
         return $this->db;
     }
 }

 $base=new Db();
 $db=$base->connect();
?>
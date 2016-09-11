<?php

define('MySQL_HOST',getenv('IP'));
define('MySQL_USER',getenv('C9_USER'));
define('MySQL_DB_NAME','blog_tema');
define('MySQL_PASSWORD','');



class DB {
  // setam variabila conexiunii
  protected $dbh;
  // pe constructor se face conexiunea la db si initializarea variabilei dbh
  function __construct(){
      try {
         $this -> dbh = new PDO('mysql:host='.MySQL_HOST.';dbname='.MySQL_DB_NAME, MySQL_USER, MySQL_PASSWORD);
         
      } catch (PDOException $e) {
          print "Error!: Cannot connect to db! Check connection   " . $e->getMessage() . "<br/>";
          die();
      }
      
  }
}
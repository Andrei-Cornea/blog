<?php

class Home {
  
  function index(){
    
    $title= 'Home';
    $PageContent = 'homeview.php';
    
    include VIEWS."layoutview.php";
  }
  
}
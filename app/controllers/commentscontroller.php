<?php
require HELPERS."helper.php";
require MODELS."commentsmodel.php";

class Comments {
  
  function index(){
    $commentsModel = new CommentsModel();
    $result = $commentsModel-> getComments($_GET['id']);
    
    sendResponseToJSON($result);
  }
  
  function addComment(){
     $commentsModel = new CommentsModel();
     $result = $commentsModel-> addComment($_POST);
     
     sendResponseToJSON(array("add_Com"=>$result));
  }
  
}
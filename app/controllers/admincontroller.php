<?php
require 'app/helpers/helper.php';
require MODELS."articlesmodel.php";

class Admin {
  
  function __construct(){
    if(!isset($_SESSION["isLogged"]) && !$_SESSION["isLogged"]){
      
        header("Location: " . BASE_URL . "login");
    }
  }
  
  function index(){
    $title='Admin';
    
    $PageContent="adminview.php";
    include VIEWS."layoutview.php";
  }
  
  function getArticles(){
    
    $search = (!empty($_GET['search'])) ? $_GET['search'] : '';
    
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->getArticles($search);
        sendResponseToJSON($result);
  }
  
  function getArticle(){
    
        $articlesModel = new ArticlesModel();
        
        $result = $articlesModel->getArticle($_GET['id']);
        
        sendResponseToJSON($result);
  }
  
 function deleteArticle(){
   
    parse_str(file_get_contents("php://input"), $_DELETE);
    
    $articlesModel = new ArticlesModel();
    $result = $articlesModel->deleteArticle($_DELETE["id"]);
    
    sendResponseToJSON(array("deleted" => $result));
 } 

  function addArticle(){
    
    $articlesModel = new ArticlesModel();
    $result = $articlesModel->addArticle($_POST);
    
    
    sendResponseToJSON(array("added"=>$result));
  }
  
  function updateArticle(){
    
    $articlesModel = new ArticlesModel();
    $result = $articlesModel->updateArticle($_POST);
    
    
    sendResponseToJSON(array("updated"=>$result));
  }
  
}
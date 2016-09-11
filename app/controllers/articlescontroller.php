<?php
  require HELPERS."helper.php";
  require MODELS.'articlesmodel.php';

class Articles {
  
  public $page;
  public $limit;
  
  function index(){
    $params=[];
    $params['page'] = isset($_GET["page"]) ? $_GET["page"]:1 ;
    $params['limit'] = isset($_GET['items'])? $_GET['items']:3 ;
    $params['search'] = isset($_GET['search'])? $_GET['search']:'' ;
    
    $sQuery = !empty($params['search'])? "&search=".$params['search']: '';
    
    $this->page = $params['page'];
    $this->limit = $params['limit'];
    
    //request data from db
    $articlesModel = new ArticlesModel();
    $articles = $articlesModel->getArticlesPaginated($params);
    //render view
    $title="Home";
    $PageContent= VIEWS.'articlesview.php';
    
    include VIEWS."layoutview.php";
  }
  
  function articlesP(){
    
    // set pagination params
    $params=[];
    $params['page'] = isset($_GET["page"]) ? $_GET["page"]:1 ;
    $params['limit'] = isset($_GET['items'])? $_GET['items']:3 ;
    $params['search'] = isset($_GET['search'])? $_GET['search']:'' ;
    
    $sQuery = !empty($params['search'])? "&search=".$params['search']: '';
    
    $this->page = $params['page'];
    $this->limit = $params['limit'];
    
    //request data from db
    $articlesModel = new ArticlesModel();
    $result = $articlesModel->getArticlesPaginated($params);
    sendResponseToJSON($result);
  }
  
  function getArticles(){
    
    $search = (!empty($_GET['search'])) ? $_GET['search'] : '';
    
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->getArticles($search);
        sendResponseToJSON($result);
  }
  
  function ifPageNotExist($page) {
        if ($page < 1) {
            return 'disabled';
        }
        
        $search['search'] = isset($_GET['search'])? $_GET['search']:'';
        
        $articlesModel = new ArticlesModel();
        $result = $articlesModel->getArticlesCount($search);
        $articles_count = $result['articles_count'];
        $numOfPages = ceil($articles_count / $this->limit);
        
        // var_dump($numOfPages);
        
        if ($page > $numOfPages) {
            return 'disabled';
        } 
        
    }
    
    
  function ArticlesCount(){
     $articlesModel = new ArticlesModel();
     $result = $articlesModel->getArticlesCount();
     sendResponseToJSON($result);
  }  
}
  


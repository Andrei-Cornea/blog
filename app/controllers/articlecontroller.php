<?php
require HELPERS."helper.php";
require MODELS."articlesmodel.php";

class Article {

    function index() {
        
        //request data from db
        $articleModel = new ArticlesModel();
        $article = $articleModel->getArticle($_GET["id"]);

        //render view
        $title = $article["title"];
        $PageContent = "articleview.php";
        include VIEWS."layoutview.php";
    }
}
<?php

$pages = array(
  
  // "/"=>['path'=> "homecontroller.php",
  //       'class'=>'Home',
  //       'method'=>'index'],
    
  // "/home"=>['path'=> "homecontroller.php",
  //           'class'=>'Home',
  //           'method'=>'index'],
            
  // "/download"=>['path'=> "downloadcontroller.php",
  //           'class'=>'Download',
  //           'method'=>'index'],
  
  '/'=>['path'=> "articlescontroller.php",
                'class'=>'Articles',
                'method'=>'index'],
                
  '/home'=>['path'=> "articlescontroller.php",
                'class'=>'Articles',
                'method'=>'index'],
  '/articles'=>['path'=> "articlescontroller.php",
                'class'=>'Articles',
                'method'=>'index'],
                
  '/articles/getP'=>['path'=> "articlescontroller.php",
                'class'=>'Articles',
                'method'=>'articlesP'],
                
  '/articles/count'=>['path'=> "articlescontroller.php",
                'class'=>'Articles',
                'method'=>'ArticlesCount'],
                
  '/article'=>['path'=> "articlecontroller.php",
                'class'=>'Article',
                'method'=>'index'],
                
  '/article/addComment'=>['path'=> "commentscontroller.php",
                'class'=>'Comments',
                'method'=>'addComment'],
                
  '/article/Comments'=>['path'=> "commentscontroller.php",
                'class'=>'Comments',
                'method'=>'index'],
                
  '/articles/get'=>['path'=> "articlescontroller.php",
                'class'=>'Articles',
                'method'=>'getArticles'],
        
  '/contact'=>['path'=> "contactcontroller.php",
                'class'=>'Contact',
                'method'=>'index'],
                
  '/login' =>['path'=> "logincontroller.php",
                'class'=>'Login',
                'method'=>'index'],
                
  '/logout' =>['path'=> "logincontroller.php",
                'class'=>'Login',
                'method'=>'logout'],
                
  '/admin/logout' =>['path'=> "logincontroller.php",
                'class'=>'Login',
                'method'=>'logout'],
                
  '/admin' =>['path'=> "admincontroller.php",
                'class'=>'Admin',
                'method'=>'index'],
                
  '/admin/articles' =>['path'=> "admincontroller.php",
                'class'=>'Admin',
                'method'=>'getArticles'],
                
  '/admin/article' =>['path'=> "admincontroller.php",
                'class'=>'Admin',
                'method'=>'getArticle'],
                
  '/articles/delete' =>['path'=> "admincontroller.php",
                'class'=>'Admin',
                'method'=>'deleteArticle'],
                
  '/articles/add' =>['path'=> "admincontroller.php",
                'class'=>'Admin',
                'method'=>'addArticle'],
  
  '/articles/update' =>['path'=> "admincontroller.php",
                'class'=>'Admin',
                'method'=>'updateArticle']
  
  );
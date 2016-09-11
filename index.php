<?php
  // Display all errors on page
  ini_set('error_reporting', E_ALL);
  define("BASE_URL","https://andrei-cornea-andreic15.c9users.io/Practice/MVC/Blog/");  
    //paths
  define("MODELS","app/models/");
  define("CONTROLLERS","app/controllers/");
  define("VIEWS","app/views/");
  define("ROUTES","app/configs/");
  define("HELPERS", "app/helpers/" );
  
  // assets
  define("CSS",BASE_URL."assets/css/");
  define("IMG",BASE_URL."assets/img/");
  define("JS", BASE_URL."assets/js/");
  
  session_start();
  require ROUTES.'pages.php';
  
  if(!isset($_SERVER['PATH_INFO'])){
    
      $_SERVER['PATH_INFO']='/';
      
  }
  
  $page = $_SERVER['PATH_INFO'];
  
  // removes " / " , =>  poti accesa routele cu / sau fara / 
  if($page !== '/'){
    $page = rtrim($page ,'/');
  }
  
  // echo'<pre>';
  // print_r($_SERVER);
  
  if(array_key_exists($page, $pages)){
    
      // aduci controlerul specific
      require CONTROLLERS.$pages[$page]['path'];
      // instantiezi clasa
      $controller = new $pages[$page]['class']();
      // apelezi methoda  index()
      $controller->$pages[$page]['method']();
      
  }else{
    echo 'Page Not Found!';
    exit;
  }
  
  
<?php


class Login {
  
  function __construct(){
    
    if(isset($_SESSION["isLogged"]) && $_SESSION["isLogged"]){
      
        header("Location: admin");
       
    }
    
  }

  function index(){
    
    if(isset($_POST["submit"]) && isset($_POST["email"])){ 
      
      require MODELS.'loginmodel.php';

      $loginmodel = new LoginModel();
      
      $result = $loginmodel-> login($_POST);
      
      var_dump($result);
      
      if($_POST["email"] === $result["user_name"]){
        
        echo "Login succesfull!";
        $_SESSION["isLogged"] = true;
        $_SESSION["name"] = $_POST["email"];
        
        header("Location: admin");
        
      }else{
        
        echo"Try again!";
      }
      
    }
    
    $title="Login";
    include VIEWS."loginview.php";
    // include VIEWS."layoutview.php";
  }
  
  function logout(){
    unset($_SESSION['isLogged']);
    session_destroy();
    header("Location: home");
    exit;
    
  }
  
} 
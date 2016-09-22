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
      

      
      if($this->validate($result)){
        
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
  
   function validate($data){
     
     $pass = $_POST["password"];
     
        if ($_POST["email"] === $data["user_name"] && $data["password"] == crypt($pass,$data["password"])) {
            return true;
          }
          
        // return false;
      }
  
  function logout(){
    unset($_SESSION['isLogged']);
    session_destroy();
    header("Location: home");
    exit;
    
  }
  
} 
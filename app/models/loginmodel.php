<?php
require "db.php";

class LoginModel extends DB {
  
  function login($data){
    $params = [":email"=>$data["email"]];
    $sql = "SELECT * from users where user_name = :email and active = 1";
    $sth = $this->dbh->prepare($sql);
    $sth->execute($params);
    
    return $sth->fetch(PDO::FETCH_ASSOC);    
    
   
  }
  
}

  // function login($data){
    
  //   $username= $data['username'];
  //   $password= $data['password'];
    
  //   $sql="Select * from users where user_name = ?";
  //   $sth= $this->dbh->prepare($sql);
  //   $sth->execute(array($username));
    
  //   $result = $sth->fetch(PDO::FETCH_ASSOC);
    
  //   if(!$result){
  //     return false; 
  //     exit;
  //   }
    
  //   $dbpass = $result["password"];
    
  //   if(!$this->matchPassword($password, $dbPassword)){
  //     return false;
  //     exit;
  //   }
    
  //   return true;
  // }
  
  // function matchPassword($password, $dbPassword){
    
  //   return $dbPassword === $password;
    
  // }

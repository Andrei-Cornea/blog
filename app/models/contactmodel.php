<?php
require MODELS."db.php";

class ContactModel extends DB {
  
  function addMessage($message){
    $params = [':email'=>$message['email'],':message'=>$message['msg'],':name'=>$message['name']];
    $sql = 'INSERT INTO messages (name,mail,message) VALUES(:name,:email,:message)';
    $sth = $this->dbh->prepare($sql);
    $sth->execute($params);
    
    return $sth->rowCount();
  }
}
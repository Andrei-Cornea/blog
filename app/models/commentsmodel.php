<?php
require"db.php";

class CommentsModel extends DB{
  
  function addComment($comment){
    $params = [":article_id"=>$comment['id'],":name"=>$comment['name'],":email"=>$comment['email'],":comment"=>$comment['comment']];
    $sql = "INSERT INTO comments (article_id,name,email,comment) VALUES(:article_id,:name,:email,:comment)";
    $sth = $this->dbh->prepare($sql);
    $sth->execute($params);
    
    return $sth->rowCount();
  }
  
  function getComments($article_id){
    $params = [':article_id'=>$article_id];
    $sql= "SELECT * FROM comments WHERE article_id = :article_id";
    $sth = $this->dbh->prepare($sql);
    $sth->execute($params);
    
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  }
}
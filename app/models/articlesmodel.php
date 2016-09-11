<?php

require 'db.php';

class ArticlesModel extends DB{
  
  // Get list of all published articles
  
  function getArticles($search = ''){
    //  ===== !!!!!!!!!!!!!!!! AI GRIJA LA SPATIU DE LA $sQuery ---- :" and title
    
    $sQuery = ($search === "") ?  '' :" and title like '%$search%'";
    $sql = "SELECT * FROM articles WHERE published=1 $sQuery";
    $sth = $this-> dbh -> prepare($sql);
    $sth->execute();
    
    return $sth -> fetchAll(PDO::FETCH_ASSOC);
    
  }
  
   // Get article by id
  
  function getArticle($id){
    
    $params = [':id'=> $id];
    $sql = "SELECT * FROM articles WHERE id= :id AND published = 1";
    $sth = $this->dbh-> prepare($sql);
    $sth->execute($params);
    
    return $sth->fetch(PDO::FETCH_ASSOC);
    
  }
  
    // Delete article by id
  
  function deleteArticle($id){
    
    $params = [':id'=> $id];
    $sql = "UPDATE articles SET published = 0 WHERE id= :id  ";
    $sth = $this->dbh-> prepare($sql);
    $sth->execute($params);
    
    return $sth->rowCount();
    
  }
  
   // Add new article
   
  function addArticle($article){
    
    $params=[":title"=>$article['title'],":content"=>$article['content']];
    $sql = "INSERT INTO articles(title,content,cd) VALUES (:title,:content,CURDATE())";
    $sth = $this->dbh->prepare($sql);
    $sth->execute($params);
    
    return $sth->rowCount();
    
  }
  
  // UPDATE article
  
  function updateArticle($article){
    
    $params=[":id"=> $article["id"],":title"=>$article['title'],":content"=>$article['content']];
    $sql = "UPDATE articles SET title = :title, content = :content WHERE id = :id ";
    $sth = $this->dbh->prepare($sql);
    $sth->execute($params);
    
    return $sth->rowCount();
    
  }
  // get articles paginated
  function getArticlesPaginated($params){
    
    //prepare limit and offset
    $limit  = $params['limit'];      // records number
    $page   = $params['page'];       // page number
    $offset = $limit*$page - $limit; // numarul de la care incepe lista de articole 
    $search = $params['search'];
    
    $sQuery = ($search === "") ?  '' :" and title like '%$search%'";
    
    //get data
    $sql = "select * from articles where  published = 1 $sQuery limit $offset, $limit";
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    
    //send response
    return $sth->fetchAll(PDO::FETCH_ASSOC);   
    
  }
  
   function getArticlesCount($params='') {
     
     $search = !empty($params['search'])? $params['search']:'';
     $sQuery = ($search === "") ?  '' :" and title like '%$search%'";
    //get data
    $sql = "select count(*) as articles_count from articles where published=1 $sQuery";
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    
    //send response
    return $sth->fetch(PDO::FETCH_ASSOC); 
  }
  
}
<?php
    require MODELS.'contactmodel.php';  
    require HELPERS."helper.php";
class Contact {
  
  function index(){
    $feedback='';
    
    if(isset($_POST['submit']) && $_POST['submit']){
      
      $contactmodel = new ContactModel();
      
      $message = $contactmodel->addMessage($_POST);
      sendResponseToJSON(array('Message' =>$message ));
      // if($message !== 0){
      //   header("Location: ".BASE_URL."contact");
      // }
      
      // if($message){
        
      //   $feedback = "Thanx for povesti";
        
      // }else{
        
      //   $feedback= "Ai vorbit urat!";
        
      // }
    }
    
    $title="Contact";
    $PageContent= "contactview.php";
    include VIEWS."layoutview.php";
  }
  
}
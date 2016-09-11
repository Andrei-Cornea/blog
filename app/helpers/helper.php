<?php

function sendResponseToJSON($response){
    header('Content-Type: application/json');
    
  try{
    
    $res = json_encode($response);
    
  } catch(Exeception $e){
    
    $res = json_encode(array("error"=>"Invalid response"));
  }
  
   echo $res;
    die();
}



function shorten($text, $maxLength) {
      $ret = $text;
      
     if ( strlen($ret) > $maxLength) {
            $ret = substr($ret,0,$maxLength). "&#x02026";
        }
        return $ret;
    } 
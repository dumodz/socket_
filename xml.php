<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

class xml{
  private $response_;
  
  function handleXML($read_){
    switch($read_){
      case strpos($read_, '<policy-file-request/>'):
        $response_ = "<cross-domain-policy><allow-access-from domain='*' to-ports='*' /></cross-domain-policy>";
        break;
    }
    
    return $response_;
  }
}
?>

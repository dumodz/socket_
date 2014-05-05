<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

class xml{
  private $xmlResponse;
  
  function handleXML($xml){
    switch($xml){
      case strpos($xml, '<policy-file-request/>'):
        $xmlResponse = "<cross-domain-policy><allow-access-from domain='*' to-ports='*' /></cross-domain-policy>";
        break;
    }
    
    return $xmlResponse;
  }
}
?>

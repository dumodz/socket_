<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

class logger{
  function consoleLog($log){
    echo '[socket_LOG] [' . time() . '] ' . $log . chr(10);
  }
  
  function closeLog($log){
    echo '[socket_CLOSE_LOG] [' . time() . '] ' . $log . chr(10);
  }
}
?>

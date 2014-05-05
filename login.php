<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

require('server.php');
require('logger.php');
require('xml.php');

$server = new server();
$server->socketConnect('127.0.0.1', 6112, 'login');
?>

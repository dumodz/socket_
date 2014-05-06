<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

require('server.php');
require('logger.php');
require('xml.php');
require('packet.php');

$server = new server();
$server->socketConnect('127.0.0.1', 6112, 'login');

$pdo = new pdo();
$pdo->pdoConnect('127.0.0.1', 'root', 'password', 'socket_', 'clients');
?>

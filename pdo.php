<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

class mysql{
  private $logger;
  private $database_;
  private $table_;
  private $pdo_;
  
  function __construct(){
    $this->logger = new logger();
  }
  
  function pdoConnect($address, $username, $password, $database, $table){
    $this->database_ = $database;
    $this->table_ = $table;
    
    $this->pdo_ = new PDO('mysql:host=' . $address . ';dbname=' . $database, $username, $password);
    
    if($this->pdo_ !== false){
      $this->logger->consoleLog('Connected to MYSQL server');
    }
    else{
      $this->logger->closeLog('Could not connect to MYSQL server [' . $this->pdo_->errorCode() . '] ' . $this->pdo_->errorInfo());
    }
  }
}
?>

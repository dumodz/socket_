<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

class server{
  private $logger;
  private $server_;
  private $client_;
  
  function __construct(){
    $this->logger = new logger();
  }
  
  function socketConnect($address, $port){
    $this->server_ = stream_socket_server('tcp://' . $address . ':' . $port, $errno, $errstr);
    
    if($server !== false){
      $this->logger->consoleLog('Connected to server');
      
      $this->socketLoop();
    }
    else{
      $this->logger->closeLog('Could not connect to server');
    }
  }
  
  function socketLoop(){
    for(;;){
      $this->client_ = @stream_socket_accept($this->server_);
      
      $this->logger->consoleLog('Now accepting client connections');
      
      if($this->client_){
        $this->socketAccept();
      }
    }
  }
  
  function socketAccept(){
    $this->logger->consoleLog('New client connection accepted');
    
    $this->socketRead();
    
    $this->socketClose();
  }
  
  function socketRead(){
    $read = stream_get_contents($this->client_);
    
    $ths->logger->consoleLog('Read: "' . $read . '" from the client');
  }
  
  function socketClose(){
    fclose($this->client_);
    
    $this->logger->consoleLog('Client connection closed');
  }
}
?>

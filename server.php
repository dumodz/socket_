<?php
/*
  socket_
  Written by dumodz
  
  GitHub: https://github.com/dumodz/socket_/
*/

class server{
  private $logger;
  private $address_;
  private $port_;
  private $type_;
  private $server_;
  private $client_;
  private $read_;
  private $write_;
  
  function __construct(){
    $this->logger = new logger();
  }
  
  function socketConnect($address, $port, $type){
    $this->address_ = $address;
    $this->port_ = $port;
    $this->type_ = $type;
    
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
    $contents = stream_get_contents($this->client_);
    
    $this->read_ = fread($this->client_, strlen($contents));
    
    $ths->logger->consoleLog('Read: "' . $this->read_ . '" from the client');
    
    // Used to make the socket server respond to the Club Penguin client
    $this->handleClient();
  }
  
  function handleClient(){
    $xml = new xml();
    $this->write_ = $xml->handleXML($this->read_);
    
    $this->socketWrite();
  }
  
  function socketWrite(){
    $write = $this->write_ . chr(0);
    
    fwrite($write, strlen($write));
    
    $this->logger->consoleLog('Wrote: "' . $this->write_ . '" to the client');
  }
  
  function socketClose(){
    fclose($this->client_);
    
    $this->logger->consoleLog('Client connection closed');
  }
}
?>

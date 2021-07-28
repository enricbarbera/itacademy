<?php

    class Connexio{
    
        private $host;
        private $user;
        private $pwd;
        private $db;
        private $port;
        
        function __construct() {
          $this->host = "localhost";
          $this->user = "root";
          $this->pwd = "Delbar1748!";
          $this->db = "m8_llistacompra";
          $this->port = 3307;
        }
          
        function connectar(){
            $connexio = new mysqli($this->host,$this->user,$this->pwd,$this->db,$this->port);
            return $connexio;
        }
        
        function desconnectar($connexio){
            $connexio->close();
        }
    }
<?php

class Conexion{

    private $server;
    private $user;
    private $pwd;
    private $bd;
    private $mysqli;
    private $conn;

    function __construct(){
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pwd = '';
        $this->bd = 'sisgep';
    }

    public function conectar(){

        $this->conn = mysqli_connect($this->server,$this->user,$this->pwd,$this->bd);
    }

    
    public function cerrarConexion(){
        $this->conn->close();
    }


    public function consultar($query){
        
        $result = mysqli_query($this->conn,$query);
        $this->cerrarConexion();
        return $result;
    }

}


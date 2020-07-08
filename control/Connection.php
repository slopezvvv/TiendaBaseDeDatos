<?php

include 'IConnection.php';

// Definición del objeto de conexión
abstract class Connection implements IConnection{
    protected $conn;
    
    function __construct(){
        $this->conn = new mysqli("127.0.0.1", "root", "", "tienda_db");
    }
    
    
}

<?php

include 'Connection.php';
include '../modelo/Producto.php';

class CProducto extends Connection{
    
    function __construct() {
        parent::__construct();
    }
    
    public function insertar($producto) {
 
        // SENTENCIA PREPARADA
        // FORMA ACTUAL
        $sentencia = $this->conn->prepare("INSERT INTO producto VALUES(?, ?, ?, ?);");
        
        $id = $producto->getId();
        $nombre = $producto->getNombre();
        $precio = $producto->getPrecio();
        $cantidad = $producto->getCantidad();
        
        // i -> para los enteros
        // s -> para los string's
        // d -> para los double's
        // etc....
        $sentencia->bind_param("isdi", 
                $id, $nombre, $precio, $cantidad);
        
        $sentencia->execute();
    }
    
    public function consultar($id) {
        return null;
    }

    public function consultarTodos() {
        return null;
    }
    
    public function eliminar($id) {
        return false;
    }
    
    public function actualizar($id, $obj) {
        return false;
    }
}

$producto = new Producto();
$producto->setId($_POST['idProducto']);
$producto->setNombre($_POST['nombreProducto']);
$producto->setPrecio($_POST['precioProducto']);
$producto->setCantidad($_POST['cantidadProducto']);

$cProducto = new CProducto();

$cProducto->insertar($producto);

header("Location: ../Admin.php");
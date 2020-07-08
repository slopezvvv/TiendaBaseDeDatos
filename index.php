<?php
include_once 'modelo/Producto.php';
session_start();

$todosLosProductos = [];
$carrito = [];

$producto1 = new Producto();
$producto2 = new Producto();

$producto1->setNombre("Producto_1");
$producto2->setNombre("Producto_2");

array_push($carrito, $producto1);
array_push($carrito, $producto2);

$_SESSION['carrito'] = serialize($carrito); // asi se guarda

$carrito = unserialize($_SESSION['carrito']); // asi se recupera

// Listar los productos del carrito
echo("Los productos en el carrito son:");
for($i = 0; $i < sizeof($carrito); $i++){
    echo("Nombres: ".$carrito[$i]->getNombre());
}
?>
<!-- 
Este es el catálogo
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda online</title>
        <script src="scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        
        ?>
        
        <button onclick='goTo("Login.php")'>Iniciar sesión</button>
    </body>
</html>

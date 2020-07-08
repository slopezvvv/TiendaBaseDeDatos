<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda online - Login</title>
        <script src="scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="" method="post" >
            <input type="text" name="username" placeholder="Nombre de usuario" />
            <input type="password" name="pass" placeholder="Contraseña" />
            <input type="submit" value="Log in"/>
        </form>
        
        <button onclick='goTo("index.php")'>Volver al catálogo</button>
    </body>
</html>

<?php

// metodos abstractos y publicos
interface IConnection {
    function insertar($obj); // insert
    function consultar($id); // select * from tabla where id = ?
    function consultarTodos(); // select * from tabla;
    function eliminar($id); // update
    function actualizar($id, $obj); // update
}

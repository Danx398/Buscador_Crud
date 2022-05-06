<?php
    include "../app/conexion.php";
    include "../app/metodos.php";
    $id = $_GET['id'];

    $obj = new metodos();
    if ($obj->eliminarDatos($id)) {
        header("location:../view/todos_paises.php");
    }else{
        echo "Tas mal pa";
    }
?>
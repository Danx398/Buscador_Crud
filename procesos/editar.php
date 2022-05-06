<?php
    include "../app/conexion.php";
    include "../app/metodos.php";

    $id=$_POST['id'];
    $continente = $_POST['lista_paises'];
    $nombre = $_POST['nombre'];
    $url=$_POST['url'];

    $datos = array($id,$continente,$nombre,$url);

    $obj = new metodos();
    if ($obj->editarTarea($datos)) {
        header("location:../view/todos_paises.php");
    }else{
        echo "Tas mal pa";
    }
?>
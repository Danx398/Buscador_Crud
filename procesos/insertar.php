<?php
    include "../app/metodos.php";
    include "../app/conexion.php";


    $id_continente = $_POST['lista_paises'];
    $nombre_pais = $_POST['nombre'];
    $url = $_POST['url'];
    $datos = array($id_continente,$nombre_pais,$url);
     
    $c = new metodos();

    if ($c->buscarRepetidos($nombre_pais) == 1) {
        echo "Tas mal, repetido";
    }else if ($c->insertarDatos($datos)) {
        header("location:../index.php");
    }
    
?>
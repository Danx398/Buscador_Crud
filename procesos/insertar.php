<?php
    include "../app/metodos.php";
    include "../app/conexion.php";


    $id_continente = $_POST['lista_paises'];
    $nombre_pais = $_POST['nombre'];
    $url = $_POST['url'];
    $datos = array($id_continente,$nombre_pais,$url);
     
    $c = new metodos();

    if ($c->buscarRepetidos($nombre_pais) == 1) {
        echo'<script type="text/javascript">
            alert("Pais Repetido, por favor verifica");
            window.location.href="../view/nuevo_pais.php";
            </script>';
    }else if ($c->insertarDatos($datos)) {
        header("location:../index.php");
    }
    
?>
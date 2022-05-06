<?php
        class Conexion{
            public function conectar(){
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "buscador" ;

                $conexion = new mysqli($servidor,$usuario, $password, $bd);

                return $conexion;
            }
        }
    ?>
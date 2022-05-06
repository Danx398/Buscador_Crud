<?php

    class metodos{
        public function mostrarSelect(){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql="SELECT * FROM t_continente";
            $resultado = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function mostrarDatos($id){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql="SELECT * FROM v_continente_pais where idContinente = '$id'";
            $resultado = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function insertarDatos($datos){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql = "INSERT INTO t_pais(id_continente, nombre_pais, imagen) values ('$datos[0]','$datos[1]','$datos[2]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
        public function mostrarDatosGenerales(){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql="SELECT * FROM v_continente_pais where idContinente= idContinente";
            $resultado = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function eliminarDatos($id){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql = "DELETE from t_pais where id_pais='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
        public function editarTarea($datos){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql = "UPDATE t_pais set id_continente = '$datos[1]',
                                      nombre_pais = '$datos[2]',
                                      imagen = '$datos[3]' 
                                      where id_pais='$datos[0]' ";
            return $result=mysqli_query($conexion,$sql);
        }
        public function buscarRepetidos($pais){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql = "SELECT * from t_pais where nombre_pais = '$pais'";
            $result=mysqli_query($conexion,$sql);
            if (mysqli_num_rows($result) > 0) {
                return 1;
            }else{
                return 0;
            }
        }
    }
?>
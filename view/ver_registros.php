<?php
    require_once "../app/conexion.php";
    $id = $_POST ['id'];
    $c=new Conexion();
    $conexion = $c->conectar();
    $sql = "SELECT * from v_continente_pais where idContinente='$id'";
    $resultado = mysqli_query($conexion, $sql);
    $data = '<table class="table">
                <thead align="center">
                    <th>Continent</th>
                    <th>Country</th>
                    <th>Flags</th>
                </thead>
                <tbody align="center">';
                $data .='<tr>';
                foreach ($resultado as $key){
                    
                    $data .='<td>'.$key ['nombre_continente'].'</td>';
                    $data .='<td>'.$key ['nombre_pais'].'</td>';
                    $data .='<td>'.'<img src="'.$key ['imagen'].'" width="100px">'.'</td>';
                    $data .='</tr>';
                }

    $data .= '</tbody></table>';
    echo $data;
?>
<?php
    include "../header.php";
    include "../app/config.php";
    include "../app/dependencias.php";
    require_once "../app/conexion.php";
    require_once "../app/metodos.php";
    $id = $_POST['listaPaises'];
    $obj = new metodos();
    $datos = $obj->mostrarDatos($id);
?>
<h1 class="text-center mt-3">Countries that belong to this continent</h1>



<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <th>Continent</th>
                    <th>Country</th>
                    <th>Flag</th>
                </thead>
                <tbody>
                    <?php
                        foreach($datos as $key):
                    ?>
                    <tr>
                        <td><?= $key['nombre_continente'] ?></td>
                        <td><?= $key['nombre_pais'] ?></td>
                        <td><img src="<?= $key['imagen'] ?>" alt="" width="100px"></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <a href="../index.php" class="btn btn-dark">Back</a>
    </div>
</div>



<!-- <li class="list-group-item bordered"><?= $key['nombre_pais'] ?></li> -->




<?php
    include "../footer.php";
?>
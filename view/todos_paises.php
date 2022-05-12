<?php
    include "../header.php";
    include "../app/config.php";
    include "../app/dependencias.php";
    require_once "../app/conexion.php";
    require_once "../app/metodos.php";
    $obj = new metodos();
    $datos = $obj->mostrarDatosGenerales();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="text-center">Countries</h2>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">World</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./nuevo_pais.php">New
                                    Country</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./todos_paises.php">All the
                                    countries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./mapa.php">Continents Map</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row mt-4">
        <div class="col">
            <table class="table" id="TablaCompleta">
                <thead class="text-center">
                    <th>Continent</th>
                    <th>Country</th>
                    <th>Flags</th>
                    <th>Actions</th>
                </thead>
                <tbody class="text-center">
                    <?php
                       foreach($datos as $key):
                    ?>
                    <tr>
                        <td><?= $key['nombre_continente'] ?></td>
                        <td><?= $key['nombre_pais'] ?></td>
                        <td><img src="<?= $key['imagen'] ?>" alt="" width="100px"></td>
                        <td>
                            <a href="../procesos/eliminar.php?id=<?=$key['idPais'] ?>" class="fs-3 text-danger"><i class="fa-solid fa-trash-can-xmark"></i></a>
                            <a href="../view/editar_pais.php?id=<?= $key['idPais'] ?>" class="fs-3 ms-5 text-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<?php
    include "../footer.php";
?>
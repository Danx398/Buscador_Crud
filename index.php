<?php
    include "./header.php";
    include "./app/config.php";
    include "./app/dependencias.php";
    require_once "./app/conexion.php";
    require_once "./app/metodos.php";
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="text-center">Countries</h2>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">World</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./view/nuevo_pais.php">New Country</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./view/todos_paises.php">All the countries</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <form action="./view/datos_recibidos.php" method="POST" class="form-control mt-3">
                <label for="" class="fs-3">Continent</label>
                <select name="listaPaises" id="listaPaises" class="form-select">
                    <?php
                        $obj = new metodos();
                        $datos = $obj->mostrarSelect();
                        foreach($datos AS $key):
                    ?>
                    <option value="<?= $key['id_continente'] ?>"><?= $key['continente'] ?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <button type="submit" class="btn btn-success mt-3 container-fluid">Go</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- crear una base de datos -->



<?php
    include "./footer.php";
?>
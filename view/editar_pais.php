<?php
    include "../header.php";
    include "../app/config.php";
    include "../app/dependencias.php";
    require_once "../app/conexion.php";
    require_once "../app/metodos.php";
    $c = new Conexion();
    $conexion = $c->conectar();
    $id=$_GET['id'];
    $sql = "SELECT idContinente,nombre_continente,nombre_pais,imagen from v_continente_pais where idPais='$id'";
    $resul = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($resul);
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
                        </ul>
                    </div>
                </div>
            </nav>
            <form action="../procesos/editar.php" method="POST" class="form-control mt-3" autocomplete="off">
                <div class="card mt-4">
                    <h1 class="text-center">Edit Country</h1>
                    <div class="card-body">
                        <input type="text" hidden name="id" value="<?= $id ?>">
                        <label for="">Current continent</label>
                        <input required disabled type="text" class="form-control" value="<?= $ver[1] ?>">
                        <label for="">New Continent</label>
                        <select name="lista_paises" id="lista_paises" class="form-select"">
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
                        <label for="" class="text">Name of country</label>
                        <input required class="form-control " type="text" name="nombre" value="<?= $ver[2] ?>">
                        <label for="" class="text">URL of IMG</label>
                        <input required class="form-control " type="text" name="url" value="<?= $ver[3] ?>">
                    </div>
                    <div class="row justify-content-center mb-4">
                        <button class="btn btn-success col-5 me-5"> Save</button>
                        <a href="./todos_paises.php" class="btn btn-danger col-5">Cancel</a>
                        <!-- <button class="btn btn-primary col-5"> Cancel</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include "../footer.php";
?>
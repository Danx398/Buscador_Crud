$(document).ready(()=>{
    $('#listaPaises').select2();
    $('#TablaCompleta').DataTable();

});

function verImagen(id) {
    $.ajax({
        type: 'post',
        data: 'id=' + id,
        url: '../view/ver_registros.php',
        success: function(respuesta) {
            // console.log(respuesta);
            //el id ubicado en la modal con la ruta de html src=fotos que es lo que se mandara a llamar y respuesta nos manda la foto que queremos ver
            $('#img').html(respuesta);
        }
    });
}
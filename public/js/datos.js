
$(document).ready(function() {

        if($('#buscarFecha').length == 1){
            mostrarDatos();
        }

        if($('#buscarAsunto').length == 1){
            mostrarDatos();
        }

         $('#buscarFecha').change(
        function() {
            mostrarDatos();
        });

        $('#buscarAsunto').keyup(
        function() {
            mostrarDatos();
        });

});

function mostrarDatos() {

    var fecha = $('#buscarFecha').val();
    var asunto = $('#buscarAsunto').val();

    var data = { fecha: fecha, asunto: asunto };

    var loader = '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>';

     $('.detalle').html(loader);

      $.ajax({
                method: 'GET',
                url: 'mostrar-datos',
                dataType: 'html',
                data: data,
                success: function(data) {
                    $('.detalle').html(data);
                },
            });
}

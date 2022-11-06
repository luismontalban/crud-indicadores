$(document).ready(function(){

    $("#formulario").submit(function(e) {

    let form = '#formulario';
    e.preventDefault();
    let indicador = {
        nombreIndicador: $('input[name="nombreIndicador"]').val(),
        codigoIndicador: $('input[name="codigoIndicador"]').val(),
        unidadMedidaIndicador: $('input[name="unidadMedidaIndicador"]').val(),
        valorIndicador: $('input[name="valorIndicador"]').val(),
        fechaIndicador: $('input[name="fechaIndicador"]').val(),
        tiempoIndicador: $('input[name="tiempoIndicador"]').val(),
        origenIndicador: $('input[name="origenIndicador"]').val()

    };

    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


    $.ajax({
        type: 'POST',
        url: $(this).attr("action"),
        data: indicador,
        beforeSend: function() {
            console.log("Enviando...");
            $(form).trigger("reset")
        },
        success: function(response) {
            console.log(response);

        },
        error: function() {
            console.log("Ha ocurrido un error");
        }


    });

    return false;

    });

});

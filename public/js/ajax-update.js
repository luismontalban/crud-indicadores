Jquery(document).ready(function(){

    $("#formulario-edit").submit(function(e) {

    e.preventDefault();
    const indicador = {
        nombreIndicador: Jquery('#nombreIndicador').val(),
        codigoIndicador: Jquery('#codigoIndicador').val(),
        unidadMedidaIndicador: Jquery('#unidadMedidaIndicador').val(),
        valorIndicador: Jquery('#valorIndicador').val(),
        fechaIndicador: Jquery('#fechaIndicador').val(),
        tiempoIndicador: Jquery('#tiempoIndicador').val(),
        origenIndicador: Jquery('#origenIndicador').val()

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
        success: function(response) {
            console.log(response);
            console.log("Ok");

        },
        error: function() {
            console.log("Ha ocurrido un error");
        }


    });

    return false;

    });

});

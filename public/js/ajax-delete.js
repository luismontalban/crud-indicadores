$(document).ready(function(){

    $("#btn-delete").submit(function(e) {

    e.preventDefault();
    let id = $(this).val();

    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


    $.ajax({
        type: 'POST',
        url: '/eliminar/' + id,
        success: function(data) {
            console.log("Ok");

        },
        error: function() {
            console.log("Ha ocurrido un error");
        }


    });

    return false;

    });

});

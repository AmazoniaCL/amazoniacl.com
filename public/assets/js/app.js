$(document).ready(function () {
    // Peticion AJAX para crear correo
    $('#form-contacto').submit(function () {

        $('#btn-correo').attr('disabled', true)

        $.ajax({
            url: '/create/correo',
            type: 'post',
            data: $('#form-contacto').serialize(),
            success: function (data) {
                if (data == 1) {
                    $('#form-contacto')[0].reset()
                    $('#response-true').removeClass('d-none')
                    $('#response-false').addClass('d-none')
                } else {
                    $('#response-false').removeClass('d-none')
                    $('#response-true').addClass('d-none')
                }
                $('#btn-correo').attr('disabled', false)
            }
        });

        return false;
    })
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
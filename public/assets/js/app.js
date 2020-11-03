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
});

$(function() {
    $('#WAButton').floatingWhatsApp({
      phone: '573175357182', //WhatsApp Business phone number International format-
      //Get it with Toky at https://toky.co/en/features/whatsapp.
      headerTitle: 'Chatea con nosotros!', //Popup Title
      popupMessage: 'Hola, en que podemos ayudarte?', //Popup Message
      showPopup: true, //Enables popup display
      buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
      //headerColor: 'crimson', //Custom header color
      //backgroundColor: 'crimson', //Custom background button color
      position: "left"
    });
  });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

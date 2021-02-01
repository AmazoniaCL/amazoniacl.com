$(document).ready(function () {
    // Peticion AJAX para crear correo
    $('#form-contacto').submit(function () {

        $('#btn-correo').attr('disabled', true)

        if($('#bots_verificador').val() != '' && $('#bots_verificador').val() != null){
            $('#response-false').removeClass('d-none')
            $('#response-true').addClass('d-none')
        }else{
            $('#contenido_acept_form').html(`<div class="modal-header">
                                                                        <h5 class="modal-title mt-0" id="modal-title-cotizacion">Confirmar</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">  
                                                                        <h6>Acepto que he leído la política de protección de datos personales <a href="javascript:void(0)" class="text-green">Ver Politicas.</a></h6>

                                                                            <div class="checkbox mt-3"><label><input onclick="activar_btn()" type="checkbox" id="enableCheckbox"><span class="checkbox-material"><span class="check"></span></span> Acepto</label></div>

                                                                        <div class="row mt-3 justify-content-center">
                                                                            <button type="button" id="btn_acept_boot" class="btn btn-primary btn-sm" disabled>Aceptar</button>
                                                                            <button type="button" id="" class="btn btn-secondary btn-sm ml-2" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                                                        </div>
                                                                    </div>`);
            $('#modalpasees').modal('show');
            
        }

        return false;
    })
});
act = 1;
function activar_btn(){
    if(act == 1){
        $('#btn_acept_boot').removeAttr('disabled');
        act = 0;
    }else if(act == 0){
        $('#btn_acept_boot').attr('disabled', true);
        act = 1;
    }
    
}

$('#btn_acept_boot').on('click', function () {
    $('#modalpasees').modal('hide');
    if($('#bots_verificador').val() != '' && $('#bots_verificador').val() != null){
        $('#response-false').removeClass('d-none')
        $('#response-true').addClass('d-none')
    }else{
        $.ajax({
            url: '/create/correo',
            type: 'post',
            data: $('#form-contacto').serialize(),
            success: function (data) {
                console.log(data);
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
    }
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

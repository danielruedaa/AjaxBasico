$(document).ready(function() {
//  $('#respuesta').hide();
  $('#tuto-ajax-form').submit(function(evento) {
//    $('#respuesta').hide();
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    var datos_formulario = $(this).serialize();//creo un array con los datos
    console.log(datos_formulario);
    $.ajax({
      url: 'mando.php',//direccion
      data: datos_formulario,//cargo los datos que voy a enviar
      type: 'POST',// medio de envio
      dataType: 'json',//como llega la respuseta
      success:function(datos) {// si funciono
        $('#resultados').html(datos);
        $('#respuesta').html(datos.envio);
      }
    });
  });
});

$(document).ready(function() {
//  $('#respuesta').hide();
  $('#login').click(function(evento) {
//    $('#respuesta').hide();
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    var email= ('#email').val();//traigo los datos por su id
    var pass= ('#pass').val();//
    console.log(email + pass);
    if($.trim(pass).length > 0 && $.trim(email).length > ){
    $.ajax({
      url: 'logeame.php',//direccion
      data: {email:email,pass:pass},//cargo los datos que voy a enviar
      type: 'POST',// medio de envio
      cache:"false",
      beforeSend:function() {
        $('#login').val("conectando......");
      },
      success:function (data) {
        $('#login').val('Login');
          if(data=='1'){
            $(location).attr('href','index.php');
          }else {
            $('#result').html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dissmiss='alert>&times;</button><strong>! error !</strong> las credenciales son incorrectas</div>'")
          }

      }
    });
  }else {
    alert('Datos invalidos');
  }
  });
});

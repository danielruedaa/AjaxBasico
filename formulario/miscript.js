function enviar_datos_ajax() {
  var nombre_r=document.getElementById('nombre').value;
  var login_r=document.getElementById('login').value;
  var telefono_r=document.getElementById('telefono').value;
  var email_r=document.getElementById('email').value;
  var rol_r=document.getElementById('rol').value;
  var pass_r=document.getElementById('pass').value;

  var url="donde_mando_los_datos.php"
//peticion ajax
console.log( nombre_r + " "+login_r +" "+telefono_r + " "+email_r +" "+rol_r+ " "+pass_r);
$.ajax ({
type:"post",
url:url,
data:{nombre: nombre_r,login:login_r,telefono:telefono_r,email:email_r,rol:rol_r,pass:pass_r},
success:function(datos){

  $("#mostrardatos").html(datos);
}
});


}

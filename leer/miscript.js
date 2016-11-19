$(function () {
  //var nombre_r=document.getElementById('nombre').value;
});
  var url="leer.php"
//peticion ajax

function leer() {
  var dato =('select').value;
  $.ajax ({
  type:"post",
  url:url,
  data:{"dato":dato},

  success:function(datos){

    $("#respuesta").html(datos);
  }

  });
  console.log(dato);
}

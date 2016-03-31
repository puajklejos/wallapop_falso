$(document).ready(function(){

$('form.ajax_method').on('submit',function(){

   var that=$(this),
   url=that.attr('action'),
   type=that.attr('method'),
   data={};
   that.find('[name]').each(function(index,value){
   var that=$(this),
   name=that.attr('name'),
   value=that.val();
   data[name]=value;
  });
  $.ajax({
     url:url, 
     type:type,
     data:data,
     dataType:'json',
     /*beforeSend: function(){
        $('#imgload').show();
        },*/
     success: function(output){ //output és la sortida de la funció loginn del IndexController
        console.log(output);
        console.log(output.redirect);;
       
       // redirigir en funció del login
       if(output){
          window.location.href=output.redirect;
        }

       },
       error: function(){}
});

return false;
});

$('form.ajax_method1').on('submit',function(){

   var that=$(this),
   url=that.attr('action'),
   type=that.attr('method'),
   data={};
   that.find('[name]').each(function(index,value){
   var that=$(this),
   name=that.attr('name'),
   value=that.val();
   data[name]=value;
  });
  $.ajax({
     url:url, 
     type:type,
     data:data,
     dataType:'json',
     /*beforeSend: function(){
        $('#imgload').show();
        },*/
     success: function(output){ //output és la sortida de la funció loginn del IndexController
        console.log(output);
        console.log(output.redirect);;
       
       // redirigir en funció del login
       if(output){
          window.location.href=output.redirect;
        }

       },
       error: function(){}
});
return false;
});

$('form.ajax_method2').on('submit',function(){

   var that=$(this),
   url=that.attr('action'),
   type=that.attr('method'),
   data={};
   that.find('[name]').each(function(index,value){
   var that=$(this),
   name=that.attr('name'),
   value=that.val();
   data[name]=value;
  });
  $.ajax({
     url:url, 
     type:type,
     data:data,
     dataType:'json',
     /*beforeSend: function(){
        $('#imgload').show();
        },*/
     success: function(output){ //output és la sortida de la funció loginn del IndexController
        console.log(output);
        console.log(output.redirect);;
       
       // redirigir en funció del login
       if(output){
          window.location.href=output.redirect;
        }

       },
       error: function(){}
});

return false;
});

//Dashboard

var location = window.location.href.split("/");
var local_aux = location.length;

if (location[local_aux-1]=="dashboard") {
      alert("H");
      cargar_users();
};


function cargar_users()
{
  $.ajax({
    url: '/wallapop_falso/dashboard/mostrar_datos', 
    dataType: 'json',
    success: function(output)
    {
      mostrar_users(output);
    },
    error: function(output)
    {
      console.log(output);
    }
  });
}

function mostrar_users(output)
{
  $(".usuarios").remove();
  var tabla = "";
   tabla+= '<table class="usuarios" style="background-color: white">';
    tabla+= '<thead>';
     tabla+= '<tr>';
      tabla+= '<th>ID</th>';
      tabla+= '<th>Nombre</th>';
      tabla+= '<th>Email</th>';
      tabla+= '<th>Telefono</th>';
      tabla+= '<th>Foto perfil</th>';
      tabla+= '<th>Rol</th>';
      tabla+= '<th>Poblacion</th>';
      tabla+= '<th>Pais</th>';
    tabla+= '</tr>';
  tabla+= '</thead>';
  tabla+= '<tbody>';
  $.each(output, function(index, el)
  {
    tabla+= '<tr>';
      tabla+= '<td>'+el.id_user+'</td>';
      tabla+= '<td>'+el.nombre+'</td>';
      tabla+= '<td>'+el.email+'</td>';
      tabla+= '<td>'+el.telefono+'</td>';
      tabla+= '<td>'+el.foto_perfil+'</td>';
      tabla+= '<td>'+el.rol+'</td>';
      tabla+= '<td>'+el.poblacion+'</td>';
      tabla+= '<td>'+el.pais+'</td>';
    tabla+= '</tr>';
  });
  tabla+= '</tbody>';
  tabla+= '</table>';
  $('#users_u').html(tabla);
}


});
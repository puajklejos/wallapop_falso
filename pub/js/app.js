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
  //$(".usuarios").remove();
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
};

$('form.delete_form').on('click',function(){
  var id = $("#ID_del").val();

  $.ajax({
      url:'/wallapop_falso/dashboard/eliminarusuario',
      type:"POST",
      data:{'id': id},
      dataType:'json',
      success: function(output){
        cargar_users();
        //alert(output);
      },
  });
});

$('form.insert_form').on('click',function(){
  var Id_u = $("#Id_u").val();
  var Nombre_u = $("#Nombre_u").val();
  var Email_u = $("#Email_u").val();
  var Telefono_u = $("#Telefono_u").val();
  var Foto_perfil_u = $("#Foto_perfil_u").val();
  var Rol_u = $("#Rol_u").val();
  var Pass_u = $("#Pass_u").val();
  var Poblacion_u = $("#Poblacion_u").val();
  var Pais_u = $("#Pais_u").val();

  $.ajax({
      url:'/wallapop_falso/dashboard/insertarusuario',
      type:"POST",
      data:{'id': Id_u,
            'nombre': Nombre_u,
            'email': Email_u,
            'telefono': Telefono_u,
            'foto_perfil': Foto_perfil_u,
            'rol': Rol_u,
            'pass': Pass_u,
            'poblacion': Poblacion_u,
            'pais': Pais_u},
      dataType:'json',
      success: function(output){
        cargar_users();
        //alert(Pass_u);
      },
  });
});

//Anuncios
var location = window.location.href.split("/");
var local_aux = location.length;

if (location[local_aux-1]=="user") {
      cargar_anuncios_tp();
};


function cargar_anuncios_tp()
{
  $.ajax({
    url: '/wallapop_falso/user/mostrar_anuncios', 
    dataType: 'json',
    success: function(output)
    {
      mostrar_anuncios(output);
    },
    error: function(output)
    {
      console.log(output);
    }
  });
}


function mostrar_anuncios(output)
{
  //$(".usuarios").remove();
  var tabla = "";
  tabla+= '<div class="c_anuncios">';
  $.each(output, function(index, el)
  {
    tabla+= '<div class="anuncios" style="background-color: white; border: 1px solid grey; width: 20%;">';
      tabla+= '<div style="background-color: #428CC4; padding: 10px"><span style="margin-left: 2%; margin-right: 2%; font-weight: bold;">'+el.titulo+'</span></div><br>';
      tabla+= '<span style="margin-left: 3%; margin-right: 3%;">'+el.subtitulo+'</span><br><br>';
      tabla+= '<span style="margin-left: 3%; margin-right: 3%;">'+el.descripcion+'</span><br><br>';
      tabla+= '<span style="margin-left: 3%; margin-right: 3%;"><img src="'+el.imagen1+'" style="width: 60%"></span><br><br>';
      tabla+= '<span class=like style="margin-left: 3%; margin-right: 3%; cursor: pointer" id='+index+'><img src="pub/images/pulgar_arriba.jpeg" style="width: 25%"></span><br><br></div>';
    if (index==3) 
    {
      tabla+= '</div>';
      tabla+= '<div class="c_anuncios">';
    }
  });
  $('#contenedor_anuncios').html(tabla);
};

$('form.delete_form').on('click',function(){
  var id = $("#ID_del").val();

  $.ajax({
      url:'/wallapop_falso/dashboard/eliminarusuario',
      type:"POST",
      data:{'id': id},
      dataType:'json',
      success: function(output){
        cargar_users();
        //alert(output);
      },
  });
});

$('body').on('click', '.like',function(){
  var id = $(this).attr("id");

  $.ajax({
      url:'dashboard/valorar',
      type:"POST",
      data:{'id': id},
      dataType:'json',
      success: function(output){
        alert(output);
      },
      error: function(output)
      {
      console.log(output);
      }
  });

  //alert(id);
});

});
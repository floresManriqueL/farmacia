function limpiar(){
  $('#nombre').val('');
  $('#clave').val('');
  $('#reclave').val('');
  location.href="fm_usuario.php";
}

function ajax_nombreC(str) {
   if (str==""){
      document.getElementById("nomMas").innerHTML="";return;
    }
  if(window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
  }else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }xmlhttp.onreadystatechange=function(){if (xmlhttp.readyState==4 && xmlhttp.status==200){document.getElementById("nomMas").innerHTML=xmlhttp.responseText;}}

  xmlhttp.open("GET","buscarempleado.php?opcion=buscarNombre&criterio="+str,true);
  xmlhttp.send();
  $('#ventana1').modal('hide');
} 
    

function abrir() {
  $('#ventana2').modal('show');
}
  
  function validacion() {
      var str = "";
      var te = "";

        if (document.getElementById('nombre').value == "" || document.getElementById('clave').value=="" || document.getElementById('reclave').value=="" 
          || document.getElementById('roles').value=="0" ||document.getElementById('categoria').value=="") {
            //alert("Complete los campos antes de guardar");

            if(document.getElementById('categoria').value==""){
               //llamra
             str = "categoria";
             te = "Complete el campo EMPLEADO antes de guardar";
              var categoria = document.getElementById('categoria');
             var cat = document.getElementById('cat');
             cat.style.cssText = 'color: rgb(255, 0, 0); height: 30px;';
             categoria.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('nombre').value == ""){
              //llamra
              str = "nombre";
              te = "Complete el campo NOMBRES antes de guardar.";
              var nombre = document.getElementById('nombre');
              var nom = document.getElementById('nom');
              nom.style.cssText = 'color: rgb(255, 0, 0);';
              nombre.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('clave').value == ""){
               //llamra
              str = "clave";
              te = "Complete el campo CONTRASEÑA antes de guardar.";
              var apellido = document.getElementById('clave');
              var ape = document.getElementById('pass');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
            } else if(document.getElementById('reclave').value==""){
              str = "clave";
              te = "Complete el campo CONFIRMACION antes de guardar.";
              var inputd = document.getElementById('reclave');
              var labeld = document.getElementById('pass2');
              labeld.style.cssText = 'color: rgb(255, 0, 0);';
              inputd.style.cssText = 'border-color: rgb(255, 0, 0);';
            } else if(document.getElementById('roles').value=="0"){
              str = "roles";
              te = "Seleccione un ROL antes de guardar.";
              var tcivil = document.getElementById('roles');
              var ti2 = document.getElementById('rol');
              ti2.style.cssText = 'color: rgb(255, 0, 0);';
              tcivil.style.cssText = 'border-color: rgb(255, 0, 0);';
            }

            if(str!=''){
      //mensaje
                 Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: te,
                 });
            }
            
        }else{
          var pass = document.getElementById("clave").value;
          var pass2 = document.getElementById("reclave").value;
          if (pass!=pass2) {
            Swal.fire({
                    icon: 'error',
                    title: 'La Contraseña no Coinciden...',
                    text: 'Sigui las Instrucciones.',
                 });
          }else{
            if (document.getElementById('baccion').value!="") {
                document.getElementById('bandera').value="edicion";
            } else {
                document.getElementById('bandera').value = "add";                        
            }
            document.farma.submit();
          }
        }
    }

   function generar(){
      var cadena=document.getElementById('nombre').value;
      var codi = new String("");
      var long=5;
      var lb = cadena.length;
      for (i=0; i<long; i++){
        if (i<=1) {
          codi += cadena.charAt(i).toUpperCase();
        }else{
         // codi += Math.floor(Math.random() * (9 - 1)) + 1;
        }
      } 
      codi += Math.random().toString(10).slice(2,6);
      codi += cadena.charAt(lb-1).toUpperCase();
      document.getElementById('codigo').value= codi.toString();
       $('#codigo').prop('disabled', true);
        var codigo = document.getElementById('codigo');
      var cod = document.getElementById('cod');
      cod.style.cssText = 'color: rgb(0, 0, 0); height: 30px;';
      codigo.style.cssText = 'border-color: rgb(0, 0, 0);';
    }


  function mostrarMensaje(titulo, texto, tipo, pagina,tiempo) {
          Swal.fire({
          title: 'titulo',
          icon: 'tipo',
          text: 'texto',
          showConfirmButton: false,
          timer: 1500
        });
  }

function men() {
        Swal.fire({
        title: 'SyS-Farmacia',
        text: "Estas seguro de actualizar los datos",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI, Proceder',
         closeOnConfirm:false
      });
}

function mostrar_mensaje(titulo,texto=""){
  Swal.fire({
        title: 'SyS-Farmacia',
        icon: 'warning',
        text: 'Validando',
        showConfirmButton: false,
        timer: 3000
      });
}


function redi(){
     location.href="tb_listausuario.php";
}

function redirec(){
     location.href="fm_usuario.php";
}

$(function(){

  $(document).on("blur",".validar_campos_unicos",function(e){
    e.preventDefault();
    if ($(this).val()=="") {
      return;
    }
    if (document.getElementById('baccion').value!="") {
        
    }else{
      console.log("validar_campo",$(this).data('quien_es'));
      mostrar_mensaje("Espere","Validando "+$(this).data('quien_es'));
      var datos = {"validar_campos":"si_por_campo","campo":$(this).val(),"tipo":$(this).data('quien_es')};
      var incampo = $(this).data('quien_es');
      console.log("datos: ",datos);
      $.ajax({
            dataType: "json",
            method: "POST",
            url:'json_validaUss.php',
            data : datos,
        }).done(function(json) {
          console.log("retorno de validacion",json);
          if (json[0]=="Error" && incampo=="usser") {
              var inputd = document.getElementById('nombre');
              var labeld = document.getElementById('nom');
              labeld.style.cssText = 'color: rgb(255, 0, 0);';
              inputd.style.cssText = 'border-color: rgb(255, 0, 0);'
              $('#nombre').val('');
          }
          console.log("El envio: ",json);
        }).always(function(){
          Swal.close();
        });
    }
  });
});



$(function(){
  $("#reclave").on("keyup", function(){
      var pass = document.getElementById("clave").value;
      var pass2 = document.getElementById("reclave").value;
      
      if (pass.length>0) {
        if(pass2.length>=pass.length && pass2.length>=8){
          if (pass!=pass2) {
            $("#mensajespp").text("La Contraseña no Coinciden").css("color", "red");
            $("#mensajespan").text("Requisitos Aceptados").css("color", "green");
          }else{
            $("#mensajespp").text("La Contraseña Aceptada").css("color", "green");
            $("#mensajespan").text("La Contraseña Aceptada").css("color", "green");
          }
        }else if(pass2.length>0){
           $("#mensajespp").text("Comprobando La Contraseña").css("color", "orange");
           $("#mensajespan").text("Requisitos Aceptados").css("color", "green");
        }else{
          $("#mensajespp").text("La Contraseña debe ser Igual.").css("color", "black");
        }
      }else{
        $("#mensajespp").text("LLenar Primero el Otro Campo.").css("color", "red");
        document.getElementById('reclave').value="";
        document.getElementById("clave").focus();
      }
    });
});

$(function(){
  //var len = new RegExp("^(?=.{5,})");
  $("#nombre").on("keyup", function(){
    var nomb = document.getElementById("nombre").value;
    var cont=0;
      if(nomb.length>=5){
        $("#mensajeussr").text("Nombre de Usuario Aceptado.").css("color", "green");
      }else if(nomb.length>0 && nomb.length<5){
        $("#mensajeussr").text("Son 5 Caracteres Minimos.").css("color", "red");
      }else{
        $("#mensajeussr").text("Solo letras, numeros y ( . _ - ).").css("color", "black");
      }
  });
});

  $(function(){
    var mayus= new RegExp("^(?=.*[A-Z])");
    var special= new RegExp("^(?=.*[#%&*])");
    var numbers= new RegExp("^(?=.*[0-9])");
    var lower = new RegExp("^(?=.*[a-z])");
    var len = new RegExp("^(?=.{8,})");

    var regExp = [mayus, special, numbers, lower, len];

    $("#clave").on("keyup", function(){
      var pass = $("#clave").val();
      var checke = 0;

      for (var i = 0; i < 5; i++) {
        if (regExp[i].test(pass)) {
          checke++;
        }
      }

      if(checke>0 && checke<=2){
        $("#mensajespan").text("No Cumple Requisitos").css("color", "red");
      }else if(checke>=3 && checke<=4){
        $("#mensajespan").text("No Cumple Requisitos").css("color", "red");
      }else if(checke==5){
        $("#mensajespan").text("Requisitos Aceptados").css("color", "green");
        //$("#reclave").removeAttr('disabled');
        $('#reclave').prop('disabled', false);
      }else{
        $("#mensajespan").text("Utilizar Mayusculas, Minusculas, Digitos y (#%&*).").css("color", "black");
      }
    });

  });

  $(document).ready(function(){

//--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
      $("#foto").on("change",function(){
          var uploadFoto = document.getElementById("foto").value;
          var foto       = document.getElementById("foto").files;
          var nav = window.URL || window.webkitURL;
          var contactAlert = document.getElementById('form_alert');
          
              if(uploadFoto !='')
              {
                  var type = foto[0].type;
                  var name = foto[0].name;
                  if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
                  {
                      contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                      $("#img").remove();
                      $(".delPhoto").addClass('notBlock');
                      $('#foto').val('');
                      return false;
                  }else{  
                          contactAlert.innerHTML='';
                          $("#img").remove();
                          $(".delPhoto").removeClass('notBlock');
                          var objeto_url = nav.createObjectURL(this.files[0]);
                          $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                          $(".upimg label").remove();
                          
                      }
                }else{
                  alert("No selecciono foto");
                  $("#img").remove();
                }              
      });

      $('.delPhoto').click(function(){
        $('#foto').val('');
        $(".delPhoto").addClass('notBlock');
        $("#img").remove();
        if ($('#foto_remove').val()!='' && $('#foto_actual').val()!='') {
            $('#foto_remove').val('img_producto.jpg');
        }

      });

    $("#nombre").keyup(function(e){
     // e.preventDefault();
      var nombre = document.getElementById('nombre');
      var nom = document.getElementById('nom');
      nom.style.cssText = 'color: rgb(0, 0, 0);';
      nombre.style.cssText = 'border-color: rgb(0, 0, 0);';

    });


    $("#clave").keyup(function(e){
     // e.preventDefault();
      var apellid = document.getElementById('clave');
      var apel = document.getElementById('pass');
      apel.style.cssText = 'color: rgb(0, 0, 0);';
      apellid.style.cssText = 'border-color: rgb(0, 0, 0);';
    });

    $("#reclave").keyup(function(e){
     // e.preventDefault();
      var inputd = document.getElementById('reclave');
      var labeld = document.getElementById('pass2');
      inputd.style.cssText = 'color: rgb(0, 0, 0);';
      labeld.style.cssText = 'border-color: rgb(0, 0, 0);';
    });
   

   $("#roles").click(function(e){
       // e.preventDefault();
               var tipo = document.getElementById('roles');
               var ti = document.getElementById('rol');
               ti.style.cssText = 'color: rgb(0, 0, 0);';
               tipo.style.cssText = 'border-color: rgb(0, 0, 0);';
      });

  });

  function validaNombreUsuario(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9-._]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
  }

  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }

  function soloNumero(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = "0123456789",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }

  jQuery(function($){
            // Definimos las mascaras para cada input
            $("#dui").mask("99999999-9");
            $("#nit").mask("9999-999999-999-9");
            $("#telefono").mask("9999-9999");
    });

  function mandarId(id) {

    location.href = "fm_empleado.php?id=" + id;
  }

    function showConfirmMessage(id) {
        Swal.fire({
        title: 'Quiere eliminar este registro?',
        text: "Recuerda que no lo podras recuperar los datos",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, proceder',
        closeOnConfirm:false
       }
      ).then((result) => {
  if (result.isConfirmed) {
       document.getElementById('bandera').value='delete';
       document.getElementById('baccion').value=id;
       document.farma.submit();
  }
});
   } 
   function redi(){
     location.href="tb_listausuario.php";
}


function inactivar1(idw){
        Swal.fire({
        title: 'Quiere INACTIVAR esta CUENTA?',
        text: "Recuerda que no lo podras usarla",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, proceder',
       closeOnConfirm:false
       }
      ).then((result) => {
  if (result.isConfirmed) {
       document.getElementById('bandera').value='inacti';
       document.getElementById('baccion').value=idw;
       document.farma.submit();
  }
  });
   }
 
   function activar1(ide){
       document.getElementById('bandera').value='activ';
       document.getElementById('baccion').value=ide;
       document.farma.submit();
   }

function ver(str){
        if (str==""){
          document.getElementById("verMas").innerHTML="";return;
        }
      if(window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }xmlhttp.onreadystatechange=function(){if (xmlhttp.readyState==4 && xmlhttp.status==200){document.getElementById("verMas").innerHTML=xmlhttp.responseText;}}

      xmlhttp.open("GET","verempleado.php?opcion=buscarNombre&criterio="+str,true);
      xmlhttp.send();
      $('#ventana').modal('hide');
    }
    
   
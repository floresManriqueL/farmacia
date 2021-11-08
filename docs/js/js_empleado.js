function limpiar(){
  $('#nombre').val('');
  $('#apellido').val('');
  $('#dui').val('');
  $('#nit').val('');
  location.href="fm_empleado.php";
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

  xmlhttp.open("GET","buscarcargo.php?opcion=buscarNombre&criterio="+str,true);
  xmlhttp.send();
  $('#ventana1').modal('hide');
} 
    

function abrir() {
  $('#ventana2').modal('show');
}
    function validacion() {
      var str = "";
      var te = "";

        if (document.getElementById('nombre').value == "" || document.getElementById('apellido').value=="" || document.getElementById('genero').value=="0" 
          || document.getElementById('estadocivil').value=="0" || document.getElementById('nit').value=="" || document.getElementById('dui').value=="" 
          || document.getElementById('fechanaci').value=="" || document.getElementById('direccion').value=="" || document.getElementById('telefono').value==""
          || document.getElementById('correo').value=="" || document.getElementById('salario').value=="" || document.getElementById('salario').value<="100" || document.getElementById('categoria').value=="") {
            //alert("Complete los campos antes de guardar");
            if(document.getElementById('nombre').value == ""){
              //llamra
              str = "nombre";
              te = "Complete el campo NOMBRES antes de guardar.";
              var nombre = document.getElementById('nombre');
              var nom = document.getElementById('nom');
              nom.style.cssText = 'color: rgb(255, 0, 0);';
              nombre.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('apellido').value == ""){
               //llamra
              str = "apellido";
              te = "Complete el campo APELLIDOS antes de guardar.";
              var apellido = document.getElementById('apellido');
              var ape = document.getElementById('apell');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
            } else if(document.getElementById('dui').value==""){
              str = "dui";
              te = "Complete el campo DUI antes de guardar.";
              var inputd = document.getElementById('dui');
              var labeld = document.getElementById('duila');
              labeld.style.cssText = 'color: rgb(255, 0, 0);';
              inputd.style.cssText = 'border-color: rgb(255, 0, 0);';
            } else if(document.getElementById('nit').value==""){
              str = "nit";
              te = "Complete el campo NIT antes de guardar.";
              var inputn = document.getElementById('nit');
              var labeln = document.getElementById('nitla');
              labeln.style.cssText = 'color: rgb(255, 0, 0);';
              inputn.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('estadocivil').value=="0"){
              str = "estadocivil";
              te = "Seleccione un ESTADO FAMILIAR antes de guardar.";
              var tcivil = document.getElementById('estadocivil');
              var ti2 = document.getElementById('til2');
              ti2.style.cssText = 'color: rgb(255, 0, 0);';
              tcivil.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('genero').value=="0"){
               //llamra
             str = "genero";
             te = "Seleccione un GENERO antes de guardar.";
             var tipo = document.getElementById('genero');
             var ti1 = document.getElementById('ti1');
             ti1.style.cssText = 'color: rgb(255, 0, 0);';
             tipo.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('fechanaci').value==""){
               //llamra
             str = "fecha";
             te = "Complete el campo FECHA NACIMIENTO antes de guardar.";
             var porcentaje = document.getElementById('fechanaci');
             var gan = document.getElementById('naci');
             gan.style.cssText = 'color: rgb(255, 0, 0);';
             porcentaje.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('telefono').value==""){
               //llamra
             str = "telefono";
             te = "Complete el campo TELEFONO antes de guardar.";
             var categoria = document.getElementById('telefono');
             var cat = document.getElementById('tel');
             cat.style.cssText = 'color: rgb(255, 0, 0);';
             categoria.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('direccion').value == ""){
               //llamra
              str = "direccion";
              te = "Complete el campo DIRECCION antes de guardar.";
              var apellido = document.getElementById('direccion');
              var ape = document.getElementById('direc');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('correo').value == ""){
               //llamra
              str = "correo";
              te = "Complete el campo CORREO antes de guardar.";
              var apellido = document.getElementById('correo');
              var ape = document.getElementById('corr');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('salario').value == ""){
               //llamra
              str = "salario";
              te = "El campo SALARIO debe ser mayor que $100.";
              var apellido = document.getElementById('salario');
              var ape = document.getElementById('sal');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('salario').value <= "100"){
                str = "salario";
              te = "Complete el campo SALARIO antes de guardar.";
              var apellido = document.getElementById('salario');
              var ape = document.getElementById('sal');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('categoria').value==""){
               //llamra
             str = "categoria";
             te = "Complete el campo CATEGORIA antes de guardar";
              var categoria = document.getElementById('categoria');
             var cat = document.getElementById('cat');
             cat.style.cssText = 'color: rgb(255, 0, 0); height: 30px;';
             categoria.style.cssText = 'border-color: rgb(255, 0, 0);';
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
          
            if (document.getElementById('baccion').value!="") {
                document.getElementById('bandera').value="edicion";
            } else {
                document.getElementById('bandera').value = "add";                        
            }
            document.produc.submit();
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
      html: 'Validando',
      allowOutsideClick: false,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
         
      },
      willClose: () => {
         
      }
    }).then((result) => {
      
       
    })
}

function redi(){
     location.href="tb_listaempleado.php";
}

function redirec(){
     location.href="fm_empleado.php";
}


$(document).on("blur",".validar_campos_unicos",function(e){
    e.preventDefault();
    if ($(this).val()=="") {
      return;
    }
    if (document.getElementById('baccion').value!="") {
        
    }else{
      console.log("validar_campo",$(this).data('quien_es'));
      //mostrar_mensaje("Espere","Validando "+$(this).data('quien_es'));
      var datos = {"validar_campos":"si_por_campo","campo":$(this).val(),"tipo":$(this).data('quien_es')};
      var incampo = $(this).data('quien_es');
      console.log("datos: ",datos);
      $.ajax({
            dataType: "json",
            method: "POST",
            url:'json_valida.php',
            data : datos,
        }).done(function(json) {
          console.log("retorno de validacion",json);
          if (json[0]=="Error" && incampo=="dui") {
              var inputd = document.getElementById('dui');
              var labeld = document.getElementById('duila');
              labeld.style.cssText = 'color: rgb(255, 0, 0);';
              inputd.style.cssText = 'border-color: rgb(255, 0, 0);'
              $('#dui').val('');
          }else if(json[0]=="Error" && incampo=="nit"){
              var inputn = document.getElementById('nit');
              var labeln = document.getElementById('nitla');
              labeln.style.cssText = 'color: rgb(255, 0, 0);';
              inputn.style.cssText = 'border-color: rgb(255, 0, 0);';
              $('#nit').val('');
          }else if(json[0]=="Error" && incampo=="telefono"){
              var categoria = document.getElementById('telefono');
              var cat = document.getElementById('tel');
              cat.style.cssText = 'color: rgb(255, 0, 0);';
              categoria.style.cssText = 'border-color: rgb(255, 0, 0);';
              $('#telefono').val('');
          }else if(json[0]=="Error" && incampo=="correo"){
              var apellido = document.getElementById('correo');
              var ape = document.getElementById('corr');
              ape.style.cssText = 'color: rgb(255, 0, 0);';
              apellido.style.cssText = 'border-color: rgb(255, 0, 0);';
              $('#correo').val('');
          }
          console.log("El envio: ",json);
        }).always(function(){
          Swal.close();
        });
    }
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


    $("#apellido").keyup(function(e){
     // e.preventDefault();
      var apellid = document.getElementById('apellido');
      var apel = document.getElementById('apell');
      apel.style.cssText = 'color: rgb(0, 0, 0);';
      apellid.style.cssText = 'border-color: rgb(0, 0, 0);';
    });

    $("#dui").keyup(function(e){
     // e.preventDefault();
      var inputd = document.getElementById('dui');
      var labeld = document.getElementById('duila');
      inputd.style.cssText = 'color: rgb(0, 0, 0);';
      labeld.style.cssText = 'border-color: rgb(0, 0, 0);';
    });

    $("#nit").keyup(function(e){
     // e.preventDefault();
      var inputn = document.getElementById('nit');
      var labeln = document.getElementById('nitla');
      inputn.style.cssText = 'color: rgb(0, 0, 0);';
      labeln.style.cssText = 'border-color: rgb(0, 0, 0);';
    });
   

   $("#genero").click(function(e){
       // e.preventDefault();
               var tipo = document.getElementById('genero');
               var ti = document.getElementById('ti1');
               ti.style.cssText = 'color: rgb(0, 0, 0);';
               tipo.style.cssText = 'border-color: rgb(0, 0, 0);';
      });

   $("#estadocivil").click(function(e){
       // e.preventDefault();
               var civi = document.getElementById('estadocivil');
               var ci = document.getElementById('til2');
               ci.style.cssText = 'color: rgb(0, 0, 0);';
               civi.style.cssText = 'border-color: rgb(0, 0, 0);';
      });

   $("#fechanaci").click(function(e){
       // e.preventDefault();
               var civi = document.getElementById('fechanaci');
               var ci = document.getElementById('naci');
               ci.style.cssText = 'color: rgb(0, 0, 0);';
               civi.style.cssText = 'border-color: rgb(0, 0, 0);';
      });

   $("#estadocivil").click(function(e){
       // e.preventDefault();
               var civi = document.getElementById('estadocivil');
               var ci = document.getElementById('til2');
               ci.style.cssText = 'color: rgb(0, 0, 0);';
               civi.style.cssText = 'border-color: rgb(0, 0, 0);';
      });

    $("#telefono").keyup(function(e){
         // e.preventDefault();
           var porcentaje = document.getElementById('telefono');
          var gan = document.getElementById('tel');
          gan.style.cssText = 'color: rgb(0, 0, 0);';
          porcentaje.style.cssText = 'border-color: rgb(0, 0, 0);';

      });

      $("#direccion").keyup(function(e){
         // e.preventDefault();
           var unidades = document.getElementById('direccion');
          var uni = document.getElementById('direc');
          uni.style.cssText = 'color: rgb(0, 0, 0);';
          unidades.style.cssText = 'border-color: rgb(0, 0, 0);';

      });

      $("#correo").keyup(function(e){
         // e.preventDefault();
           var unidades = document.getElementById('correo');
          var uni = document.getElementById('corr');
          uni.style.cssText = 'color: rgb(0, 0, 0);';
          unidades.style.cssText = 'border-color: rgb(0, 0, 0);';

      });

      $("#salario").keyup(function(e){
         // e.preventDefault();
           var unidades = document.getElementById('salario');
          var uni = document.getElementById('sal');
          uni.style.cssText = 'color: rgb(0, 0, 0);';
          unidades.style.cssText = 'border-color: rgb(0, 0, 0);';

      });

  });

    $(function(){
      //var len = new RegExp("^(?=.{5,})");
      var re=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9])+$/;

      $("#correo").on("keyup", function(){
        var nomb = document.getElementById("correo").value;
        if (nomb.length>0) {
            if (!re.test(nomb)) {
                $("#mensajecorr").text("Correo no valido.").css("color", "red");
            }else{
                $("#mensajecorr").text("Correo Aceptado.").css("color", "green");
            }
        }else{
            $("#mensajecorr").text("").css("color", "black");
        }
            
      });
    });

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

  function validaCorreo(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9.@]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
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
            $.mask.definitions['~']='[2,6,7]';
            $("#telefono").mask("~9999-9999");
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

  function showConfirm(id) {
        Swal.fire({
        title: 'Este Empleado Tiene Cuenta',
        text: "No puedes Eliminar",
        icon: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok, Lo entiendo',
        closeOnConfirm:false
       }
      ).then((result) => {
      if (result.isConfirmed) {
          
      }
    });
  }

  function redi(){
    location.href="tb_listaempleado.php";
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
    
   
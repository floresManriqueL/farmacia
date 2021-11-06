function limpiar(){
        $('#nombre').val('');
        $('#codigo').val('');
        location.href="fm_producto.php";
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

      xmlhttp.open("GET","buscarcategoria.php?opcion=buscarNombre&criterio="+str,true);
      xmlhttp.send();
      $('#ventana1').modal('hide');
    } 
    function ajax_nombreM(str) {
   if (str==""){
          document.getElementById("nomMas1").innerHTML="";return;
        }
      if(window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }xmlhttp.onreadystatechange=function(){if (xmlhttp.readyState==4 && xmlhttp.status==200){document.getElementById("nomMas1").innerHTML=xmlhttp.responseText;}}

      xmlhttp.open("GET","buscarmarca.php?opcion=buscarNombre&criterio="+str,true);
      xmlhttp.send();
      $('#ventana2').modal('hide');
    } 
function abrir() {
  $('#ventana2').modal('show');
}
    function validacion() {
      var str = "";
      var te = "";

        if (document.getElementById('nombre').value == "" || document.getElementById('codigo').value=="" || document.getElementById('tipo').value=="0" 
          || document.getElementById('porcentaje').value=="" || document.getElementById('categoria').value=="" || document.getElementById('marca').value=="") {
            //alert("Complete los campos antes de guardar");
            if(document.getElementById('nombre').value == ""){
              //llamra
              str = "nombre";
              te = "Complete el campo NOMBRE antes de guardar";
              var nombre = document.getElementById('nombre');
              var nom = document.getElementById('nom');
              nom.style.cssText = 'color: rgb(255, 0, 0);';
              nombre.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('codigo').value==""){
               //llamra
             str = "codigo";
             te = "Complete el campo CODIGO antes de guardar";
             var codigo = document.getElementById('codigo');
             var cod = document.getElementById('cod');
             cod.style.cssText = 'color: rgb(255, 0, 0); height: 30px;';
             codigo.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('tipo').value=="0"){
               //llamra
             str = "tipo";
             te = "Seleccione un TIPO antes de guardar";
              var tipo = document.getElementById('tipo');
             var ti1 = document.getElementById('ti1');
             ti1.style.cssText = 'color: rgb(255, 0, 0);';
             tipo.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('porcentaje').value==""){
               //llamra
             str = "porcentaje";
             te = "Complete el campo PORCENTAJE antes de guardar";
              var porcentaje = document.getElementById('porcentaje');
             var gan = document.getElementById('gan');
             gan.style.cssText = 'color: rgb(255, 0, 0);';
             porcentaje.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('categoria').value==""){
               //llamra
             str = "categoria";
             te = "Complete el campo CATEGORIA antes de guardar";
              var categoria = document.getElementById('categoria');
             var cat = document.getElementById('cat');
             cat.style.cssText = 'color: rgb(255, 0, 0); height: 30px;';
             categoria.style.cssText = 'border-color: rgb(255, 0, 0);';
            }else if(document.getElementById('marca').value==""){
               //llamra
             str = "marca";
             te = "Complete el campo MARCA antes de guardar";
              var marca = document.getElementById('marca');
             var mar1 = document.getElementById('mar1');
             mar1.style.cssText = 'color: rgb(255, 0, 0); height: 30px;';
             marca.style.cssText = 'border-color: rgb(255, 0, 0);';
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
          var verr = '';
          if(document.getElementById('tipo').value=="Blister" || document.getElementById('tipo').value=="Bote" || document.getElementById('tipo').value=="Caja" || document.getElementById('tipo').value=="Ninguno"){
                  if(document.getElementById('tipo').value=="Blister" || document.getElementById('tipo').value=="Bote" || document.getElementById('tipo').value=="Caja"){
                      if(document.getElementById('unidades').value==""){
                          var unidades = document.getElementById('unidades');
                          var uni = document.getElementById('uni');
                          uni.style.cssText = 'color: rgb(255, 0, 0);';
                          unidades.style.cssText = 'border-color: rgb(255, 0, 0);';
                     Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Complete el campo UNIDADES antes de guardar',
                     });
                     }else{
                      verr = "lleno";
                     }
                  } else {
                     verr = "lleno";
                  }             

          }
          if(verr == 'lleno'){
            if (document.getElementById('baccion').value!="") {
                $('#codigo').removeAttr('disabled');
                document.getElementById('bandera').value="edicion";
            } else {
                $('#codigo').removeAttr('disabled');
                document.getElementById('bandera').value = "add";                        
            }
            document.produc.submit();
          }
          }

    }

   function generar(){
      var cadena=document.getElementById('nombre').value;
      var codi = new String("");

       var espacion_blanco = $('#nombre').val();
      let ca= espacion_blanco.trim();

      var long=5;
      var lb = ca.length;
      for (i=0; i<long; i++){
        if (i<=1) {
          codi += ca.charAt(i).toUpperCase();
        }else{
         // codi += Math.floor(Math.random() * (9 - 1)) + 1;
        }
      } 
      codi += Math.random().toString(10).slice(2,6);
      codi += ca.charAt(lb-1).toUpperCase();
      document.getElementById('codigo').value= codi.toString();
       $('#codigo').prop('disabled', true);
        var codigo = document.getElementById('codigo');
      var cod = document.getElementById('cod');
      cod.style.cssText = 'color: rgb(0, 0, 0); height: 30px;';
      codigo.style.cssText = 'border-color: rgb(0, 0, 0);';
       console.log(ca);
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
function redi(){
     location.href="tb_listaproducto.php";
}

function redirec(){
     location.href="fm_producto.php";
}
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
      var espacion_blanco = $('#nombre').val();
            console.log(espacion_blanco);
              let nn= espacion_blanco.trim();
              console.log(nn);

     // e.preventDefault();
      var nombre = document.getElementById('nombre');
      var nom = document.getElementById('nom');
      nom.style.cssText = 'color: rgb(0, 0, 0);';
      nombre.style.cssText = 'border-color: rgb(0, 0, 0);';
      if (nn !=''){
          if (nn.length<=2) {
             $('#bgene').prop('disabled', true);
           // $('#bgene').removeAttr('disabled');
          // document.getElementById('codigo').value='';
          }else{
             $('#bgene').prop('disabled', false);
           // $('#bgene').attr('disabled','disabled');
             
          }
      }

    });

     $('#tipo').change(function(e) {
    if ($(this).val() == "Ninguno" || $(this).val() == "0") {
      $('#unidades').prop("disabled", true);
    } else {
      $('#unidades').prop("disabled", false);
    }
   
  });
   

 $("#tipo").click(function(e){
     // e.preventDefault();
             var tipo = document.getElementById('tipo');
             var ti = document.getElementById('ti');
             ti.style.cssText = 'color: rgb(0, 0, 0);';
             tipo.style.cssText = 'border-color: rgb(0, 0, 0);';
    });

$("#porcentaje").keyup(function(e){
     // e.preventDefault();
       var porcentaje = document.getElementById('porcentaje');
      var gan = document.getElementById('gan');
      gan.style.cssText = 'color: rgb(0, 0, 0);';
      porcentaje.style.cssText = 'border-color: rgb(0, 0, 0);';

  });

  $("#unidades").keyup(function(e){
     // e.preventDefault();
       var unidades = document.getElementById('unidades');
      var uni = document.getElementById('uni');
      uni.style.cssText = 'color: rgb(0, 0, 0);';
      unidades.style.cssText = 'border-color: rgb(0, 0, 0);';

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
            $("#nit").mask("9999-999999-999-3");
            $("#telefono").mask("9999-9999");
    });

     function mandarId(id) {
      Swal.fire({
        title: 'Estas seguro que quieres Actulizar este registro?',
        text: "Recuerda que no lo podras recuperar los datos",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#008F39',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Si, proceder',
       closeOnConfirm:false
       }
      ).then((result) => {
  if (result.isConfirmed) {
     location.href = "fm_producto.php?id=" + id;   
  }
  });
    }

    function showConfirmMessage(id) {
        Swal.fire({
        title: 'Quiere eliminar este registro?',
        text: "Recuerda que no lo podras recuperar los datos",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
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
     location.href="tb_listaproducto.php";
}
function inactivar1(idw){
        Swal.fire({
        title: 'Quiere INACTIVAR este PRODUCTO?',
        text: "Recuerda que no lo podras usarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
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

      xmlhttp.open("GET","verproducto.php?opcion=buscarNombre&criterio="+str,true);
      xmlhttp.send();
      $('#ventana').modal('hide');
    }
    
   
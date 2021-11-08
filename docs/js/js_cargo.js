  function limpiar(){
        $('#nombre').val('');
        $('#codigo').val('');
        location.href="fm_cargo.php";
    }




    function validacion1() {
        if (document.getElementById('nombre').value == "" || document.getElementById('codigo').value=="") {
            //alert("Complete los campos antes de guardar");
            if(document.getElementById('nombre').value == ""){
              //llamra
              var str = "nombre";
              var te = "Complete el campo NOMBRE antes de guardar";
            }else if(document.getElementById('codigo').value==""){
               //llamra
              var str = "codigo";
              var te = "Complete el campo CODIGO antes de guardar";
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
                $('#codigo').removeAttr('disabled');
                document.getElementById('bandera').value="edicion";
            } else {
                $('#codigo').removeAttr('disabled');
                document.getElementById('bandera').value = "add";                        
            }
            document.simi.submit();

        }
    }

    function generar(){


      var cadena=document.getElementById('nombre').value;

      var codi = new String("");


      var espacion_blanco = $('#nombre').val();

      let ca= espacion_blanco.trim();

      var long=5;
      for (i=0; i<long; i++){
        if (i<=1) {
          codi += ca.charAt(i).toUpperCase();
        }else{
          codi += Math.floor(Math.random() * (9 - 1)) + 1;;
        }
      } 
      
      document.getElementById('codigo').value= codi.toString();
      if (ca!='') {

        var codigo = document.getElementById('codigo');
        var cod = document.getElementById('cod');
        cod.style.cssText = 'color: rgb(0, 0, 0);';
        codigo.style.cssText = 'border-color: rgb(0, 0, 0);';
      }
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
     location.href="tb_listacargo.php";
}

  $(document).ready(function(){
 
  

 $("#nombre").keyup(function(e){

var espacion_blanco = $('#nombre').val();
            console.log(espacion_blanco);
              let nn= espacion_blanco.trim();
              console.log(nn);


var codig= document.getElementById('codigo');
  var nombre = document.getElementById('nombre');
      var nom = document.getElementById('nom');
      nom.style.cssText = 'color: rgb(0, 0, 0);';
      nombre.style.cssText = 'border-color: rgb(0, 0, 0);';

     // e.preventDefault();
  var efectivo = $('#baccion').val();
 //var c = document.getElementById('btncategoria').value;

if (codig!="") {
  var codigo = document.getElementById('codigo');
      var cod = document.getElementById('cod');
      nom.style.cssText = 'color: rgb(0, 0, 0);';
      nombre.style.cssText = 'border-color: rgb(0, 0, 0);';

}

console.log(efectivo);
           if (efectivo !='') {
 $('#bgene').prop('disabled', true);

          }
          else{
            

              if (nn!=''){
          if (nn.length<=2) {
             $('#bgene').prop('disabled', true);
           // $('#bgene').removeAttr('disabled');

            document.getElementById('codigo').value='';
          }else{
             $('#bgene').prop('disabled', false);
           // $('#bgene').attr('disabled','disabled');
             
          }
      }
          } 
    

     
    });
  /*  $('#nombre').keyup(function(e){
     // e.preventDefault();
      if ($(this).val() !=''){
          if ($(this).val().length>=2) {
             $('#bgene').prop('disabled', true);
           // $('#bgene').removeAttr('disabled');
          }else{
             $('#bgene').prop('disabled', false);
           // $('#bgene').attr('disabled','disabled');
             document.getElementById('codigo').value='';
          }
      }

    });*/

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
        location.href = "fm_cargo.php?id=" + id;
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
     location.href="tb_listacargo.php";
}


   function validacion() {
     
var str = "";
      var te = "";
          var espacion_blanco = $('#nombre').val();
          
              let n= espacion_blanco.trim();
             

        if (n =="" || document.getElementById('codigo').value=="") {

  if(n == ""){
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
                $('#codigo').removeAttr('disabled');
                document.getElementById('bandera').value="edicion";
            } else {
                $('#codigo').removeAttr('disabled');
                document.getElementById('bandera').value = "add";                        
            }
            document.simi.submit();

        }



    }

        $(document).ready(function() {
          $("#simi").parsley();
         
            });

     //  $(document).ready(function(){
      //  $.mask.definitions['~']='[a,b,c,d]';
// $('#nombre').mask('^[a-zA-Z0-9_.-]*$');
 
//});

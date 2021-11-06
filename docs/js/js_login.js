function validar() {
	 if (document.getElementById('usuario').value == "" || document.getElementById('clave').value==""){
	 	 if(document.getElementById('usuario').value == ""){
              //llamra
              str = "usuario";
              te = "Complete el campo USUARIO antes de Entrar";
              var usuario = document.getElementById('usuario');
              var usu = document.getElementById('usu');
              usu.style.cssText = 'color: rgb(255, 0, 0);';
              usuario.style.cssText = 'border-color: rgb(255, 0, 0);';
              Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: te,
                 });
            }else if(document.getElementById('clave').value==""){
               //llamra
             str = "clave";
             te = "Complete el campo CONTRASEÑA antes de Entrar";
             var clave = document.getElementById('clave');
             var clav = document.getElementById('clav');
             clav.style.cssText = 'color: rgb(255, 0, 0);';
             clave.style.cssText = 'border-color: rgb(255, 0, 0);';
             Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: te,
                 });
            }
	 }else{
	 	 document.getElementById('bandera').value = "add";
	 	 document.farmac.submit();
	 }
	
}

function validarre() {
   if (document.getElementById('dui').value == ""){
              //llamra
              str = "dui";
              te = "Complete el campo DUI antes de Recuperar correo";
              var usuario = document.getElementById('dui');
              var usu = document.getElementById('du');
              usu.style.cssText = 'color: rgb(255, 0, 0);';
              usuario.style.cssText = 'border-color: rgb(255, 0, 0);';
              Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: te,
                 });
            }else {
     document.getElementById('bandera').value = "add";
     document.farmaci.submit();
   }
  
}
 function actual() {
         fecha=new Date(); //Actualizar fecha.
         hora=fecha.getHours(); //hora actual
         minuto=fecha.getMinutes(); //minuto actual
         segundo=fecha.getSeconds(); //segundo actual
         if (hora<10) { //dos cifras para la hora
            hora="0"+hora;
            }
         if (minuto<10) { //dos cifras para el minuto
            minuto="0"+minuto;
            }
         if (segundo<10) { //dos cifras para el segundo
            segundo="0"+segundo;
            }
         //ver en el recuadro del reloj:
         if(hora>=12){
         mireloj = "Hora: "+hora+" : "+minuto+" : "+segundo+" PM"; 
          }else{
             mireloj ="Hora: "+hora+" : "+minuto+" : "+segundo+" AM";
          }
         return mireloj; 
         }
function actualizar() { //función del temporizador
   mihora=actual(); //recoger hora actual
   mireloj=document.getElementById("reloj"); //buscar elemento reloj
   mireloj.innerHTML=mihora; //incluir hora en elemento
   }
setInterval(actualizar,1000);
function men(){
  Swal.fire({
          title: 'ESPERAR 1 MINUTO',
          icon: 'error',
          text: 'USTED DEBE ESPERAR ANTES DE VOLVER A INTENTAR',
          showConfirmButton: false,
          timer: 2000
          });
}

$(document).ready(function(){
  $("#usuario").keyup(function(e){
     // e.preventDefault();
      var usuario = document.getElementById('usuario');
      var usu = document.getElementById('usu');
      usu.style.cssText = 'color: rgb(0, 0, 0);';
      usuario.style.cssText = 'border-color: rgb(0, 0, 0);';

  });
   $("#clave").keyup(function(e){
     // e.preventDefault();
     var clave = document.getElementById('clave');
             var clav = document.getElementById('clav');
      clav.style.cssText = 'color: rgb(0, 0, 0);';
      clave.style.cssText = 'border-color: rgb(0, 0, 0);';

  });
   });
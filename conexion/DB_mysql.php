<?php
class DB_mysql{
    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;

    var $Conexion_ID;
    var $Consulta_ID;

    var $Errno=0;
    var $Error="";

function __construct(){
    $this->BaseDatos="farmacia";
    $this->Servidor="localhost";
    $this->Usuario="denisleiva";
    $this->Clave="camionzapato";
    $this->conectar($this->Servidor,$this->Usuario,$this->Clave,$this->BaseDatos);
}

function conectar($host,$user,$pass,$bd){
    if($host!="")$this->Servidor=$host;
    if($user!="")$this->Usuario=$user;
    if($pass!="")$this->Clave=$pass;
    if($bd!="")$this->BaseDatos=$bd;

    $this->Conexion_ID=mysqli_connect($this->Servidor,$this->Usuario,$this->Clave,$this->BaseDatos);    
    if(!$this->Conexion_ID){
        $this->Error="La conexion ha fallado";
        return 0;
    }

}
function getConexion(){

    return $this->Conexion_ID;
}   

}

?>
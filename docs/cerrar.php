<?php session_start();

unset($_SESSION["nombre"]);
unset($_SESSION["idusuario"]);
unset($_SESSION["idempleado"]);
unset($_SESSION["tipo"]);
unset($_SESSION["estado"]);
unset($_SESSION["CORREO"]);
unset($_SESSION["contador"]);

session_destroy();

echo "<script language='javascript'>";
echo "location.href='../index.php';";
echo "</script>";

?>
<?php
require_once("./clasevalidar.php");

$obj1 = new ValidarLogin($_POST['correo'],$_POST['contraseña']);
$obj1->validar();
// $consulta = $conexion->prepare($sql);
// $consulta->execute();
?>
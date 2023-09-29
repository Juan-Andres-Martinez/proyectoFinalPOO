<?php 
require_once("./clasepago.php");



$obj1 = new Pago($_POST['nombre_de_tarjeta'],$_POST['numero_de_tarjeta'],$_POST['fecha_de_vencimiento'],$_POST['ccv']);

$obj1->guardar();
// var_dump($_POST);
// echo"hola mundoo";
?>
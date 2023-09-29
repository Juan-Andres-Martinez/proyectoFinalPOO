<?php 
require_once("./clasepersona.php");

// echo 'Hola '.$_POST['Nombres'].', tu edad es: '.$_POST['Age'];
// $hola = $_POST['LastName'].'<br/>';

$obj1 = new Persona($_POST['nombres'],$_POST['apellidos'],$_POST['correo'],$_POST['telefono'],$_POST['contraseña']);
echo $obj1->mostrarInfo().'<br/>';
$obj1->guardar();
// var_dump($_POST);
// echo"hola mundoo";
?>
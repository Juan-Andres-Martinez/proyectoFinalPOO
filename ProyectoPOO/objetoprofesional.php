<?php 
require_once("./claseprofesional.php");

$obj1 = new ProfesionalNuevo($_POST['primer_nombre'],$_POST['segundo_nombre'],$_POST['primer_apellido'],$_POST['segundo_apellido'],$_FILES['foto']['name'],$_FILES['cv']['name']);

$obj1->guardar();
?>
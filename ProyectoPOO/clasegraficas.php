<?php require('./bd.php') ?>
<?php
class Graficas{

    public static function generarGrafico1(){
        $cants = array();
        $conexion = new Conexion();
        $sql ="SELECT COUNT(*) FROM profesionales";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll();
        array_push($cants, $result[0][0]);
        $sql ="SELECT COUNT(*) FROM usuarios";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll();
        array_push($cants, $result[0][0]);
        return $cants;
    }

    public static function generarGrafico2(){
        $conexion = new Conexion();
        $sql ="SELECT COUNT(id) AS total_pagos, nombre_de_tarjeta FROM pagos GROUP BY numero_de_tarjeta;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll();
        return $result;
    }
}

?>
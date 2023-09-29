<?php require('./bd.php') ?>
<?php
class Pago {
    private $nombre_de_tarjeta;
    private $numero_de_tarjeta;
    private $fecha_de_vencimiento;
    private $ccv;

    const TABLA = 'pagos';

    public function __construct($nombre_de_tarjeta,$numero_de_tarjeta,$fecha_de_vencimiento,$ccv)
    {
        $this->nombre_de_tarjeta = $nombre_de_tarjeta;
        $this->numero_de_tarjeta = $numero_de_tarjeta;
        $this->fecha_de_vencimiento = $fecha_de_vencimiento;
        $this->ccv = $ccv;
    }

    public function guardar(){
        $conexion = new Conexion();
        $sql ="INSERT INTO pagos (nombre_de_tarjeta, numero_de_tarjeta, fecha_de_vencimiento, ccv) VALUES ('$this->nombre_de_tarjeta', '$this->numero_de_tarjeta', '$this->fecha_de_vencimiento', '$this->ccv')";
        echo $sql;
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    }

}
?>
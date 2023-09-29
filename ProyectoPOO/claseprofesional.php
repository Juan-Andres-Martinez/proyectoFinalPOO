<?php require('./bd.php') ?>
<?php
class ProfesionalNuevo {
    private $primer_nombre;
    private $segundo_nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $foto;
    private $cv;

    const TABLA = 'profesionales';

    public function __construct($primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$foto,$cv)
    {
        $this->primer_nombre = $primer_nombre;
        $this->segundo_nombre = $segundo_nombre;
        $this->primer_apellido = $primer_apellido;
        $this->segundo_apellido = $segundo_apellido;
        $this->foto = $foto;
        $this->cv = $cv;
    }
    public function guardar(){
        $conexion = new Conexion();
        $sql ="INSERT INTO profesionales (primernombre, segundonombre, primerapellido, segundoapellido, foto, cv) VALUES ('$this->primer_nombre', '$this->segundo_nombre', '$this->primer_apellido', '$this->segundo_apellido', '$this->foto', '$this->cv')";
        echo $sql;
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    }
}
?>
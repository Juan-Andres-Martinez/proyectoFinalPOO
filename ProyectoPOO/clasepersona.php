<?php require('./bd.php') ?>
<?php
class Persona 
{
    private $nombres;
    private $apellidos;
    private $correo;
    private $telefono;
    private $contraseña;

    const TABLA = 'usuarios';
    public function __construct($nombres,$apellidos,$correo,$telefono,$contraseña)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->contraseña = $contraseña;
    }

    public function getNombre (){
        return $this->nombres;
    }
    
    public function getApellido (){
        return $this->apellidos;
    }

    public function getCorreo (){
        return $this->correo;
    }

    public function getcontraseña (){
        return $this->contraseña;
    }

    public function getTelefono (){
        return $this->telefono;
    }

    public function setApellido($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setNombre ($nombres){
        $this->nombres = $nombres;
    }

    public function setCorreo ($correo){
        $this->correo = $correo;
    }

    public function setcontraseña ($contraseña){
        $this->contraseña = $contraseña;
    }

    public function setTelefono ($telefono){
        $this->telefono = $telefono;
    }

    public function mostrarInfo (){
        echo "nombres: ".$this->nombres." Apellidos: ".$this->apellidos." Correo: ".$this->correo." Telefono: ".$this->telefono;
    }
    public function guardar(){
        $conexion = new Conexion();
        $sql ="INSERT INTO usuarios (nombres, apellidos, correo, telefono, contraseña) VALUES ('$this->nombres', '$this->apellidos', '$this->correo', '$this->telefono', '$this->contraseña')";
        echo $sql;
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    }
    
} 
?>
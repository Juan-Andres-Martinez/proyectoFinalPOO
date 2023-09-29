<?php require("./bd.php"); ?>
<?php 

// class Persona 
// {
//     private $nombres;
//     private $apellidos;
//     private $correo;
//     private $telefono;
//     private $contraseña;

//     const TABLA = 'usuarios';
//     public function __construct($nombres,$apellidos,$correo,$telefono,$contraseña)
//     {
//         $this->nombres = $nombres;
//         $this->apellidos = $apellidos;
//         $this->correo = $correo;
//         $this->telefono = $telefono;
//         $this->contraseña = $contraseña;
//     }

//     public function getNombre (){
//         return $this->nombres;
//     }
    
//     public function getApellido (){
//         return $this->apellidos;
//     }

//     public function getCorreo (){
//         return $this->correo;
//     }

//     public function getcontraseña (){
//         return $this->contraseña;
//     }

//     public function getTelefono (){
//         return $this->telefono;
//     }

//     public function setApellido($apellidos){
//         $this->apellidos = $apellidos;
//     }
//     public function setNombre ($nombres){
//         $this->nombres = $nombres;
//     }

//     public function setCorreo ($correo){
//         $this->correo = $correo;
//     }

//     public function setcontraseña ($contraseña){
//         $this->contraseña = $contraseña;
//     }

//     public function setTelefono ($telefono){
//         $this->telefono = $telefono;
//     }

//     public function mostrarInfo (){
//         echo "nombres: ".$this->nombres." Apellidos: ".$this->apellidos." Correo: ".$this->correo." Telefono: ".$this->telefono;
//     }
//     public function guardar(){
//         $conexion = new Conexion();
//         $sql ="INSERT INTO usuarios (nombres, apellidos, correo, telefono, contraseña) VALUES ('$this->nombres', '$this->apellidos', '$this->correo', '$this->telefono', '$this->contraseña')";
//         echo $sql;
//         $consulta = $conexion->prepare($sql);
//         $consulta->execute();
//     }
    
// } 

// class Profesional extends Persona {
//     private $portafolio;
//     private $calificacion;
//     private $servicio;
//     public function __construct($nombres,$apellidos,$correo,$telefono,$contraseña,$portafolio,$calificacion,$servicio)
//     {
//         parent::__construct($nombres,$apellidos,$correo,$telefono,$contraseña);
//         $this->portafolio = $portafolio;
//         $this->calificacion = $calificacion;
//         $this->servicio = $servicio;
//     }
//     public function setPortafolio(){
//         return $this->portafolio;
//     }
//     public function setCalificacion(){
//         return $this->calificacion;
//     }
//     public function setServicio(){
//         return $this->servicio;
//     }
//     public function getPortafolio($portafolio){
//         $this->portafolio = $portafolio;
//     }
//     public function getCalificacion($calificacion){
//         $this->calificacion = $calificacion;
//     }
//     public function getServicio($servicio){
//         $this->servicio = $servicio;
//     }
// }

// class Cliente extends Persona {
//     private $documento;
//     private $pagos;

//     public function __construct($nombres,$apellidos,$correo,$telefono,$contraseña,$documento,$pagos){
//         parent::__construct($nombres,$apellidos,$correo,$telefono,$contraseña);
//         $this->documento = $documento;
//         $this->pagos = $pagos;
//     }

//     public function setDocumento(){
//         return $this->documento;
//     }
//     public function setPagos(){
//         return $this->pagos;
//     }
//     public function getPagos($pagos){
//         $this->pagos = $pagos;
//     }
// }

// class Pago {
//     private $nombre_de_tarjeta;
//     private $numero_de_tarjeta;
//     private $fecha_de_vencimiento;
//     private $ccv;

//     const TABLA = 'pagos';

//     public function __construct($nombre_de_tarjeta,$numero_de_tarjeta,$fecha_de_vencimiento,$ccv)
//     {
//         $this->nombre_de_tarjeta = $nombre_de_tarjeta;
//         $this->numero_de_tarjeta = $numero_de_tarjeta;
//         $this->fecha_de_vencimiento = $fecha_de_vencimiento;
//         $this->ccv = $ccv;
//     }

//     public function guardar(){
//         $conexion = new Conexion();
//         $sql ="INSERT INTO pagos (nombre_de_tarjeta, numero_de_tarjeta, fecha_de_vencimiento, ccv) VALUES ('$this->nombre_de_tarjeta', '$this->numero_de_tarjeta', '$this->fecha_de_vencimiento', '$this->ccv')";
//         echo $sql;
//         $consulta = $conexion->prepare($sql);
//         $consulta->execute();
//     }

// }

// class ProfesionalNuevo {
//     private $primer_nombre;
//     private $segundo_nombre;
//     private $primer_apellido;
//     private $segundo_apellido;
//     private $foto;
//     private $cv;

//     const TABLA = 'profesionales';

//     public function __construct($primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$foto,$cv)
//     {
//         $this->primer_nombre = $primer_nombre;
//         $this->segundo_nombre = $segundo_nombre;
//         $this->primer_apellido = $primer_apellido;
//         $this->segundo_apellido = $segundo_apellido;
//         $this->foto = $foto;
//         $this->cv = $cv;
//     }
//     public function guardar(){
//         $conexion = new Conexion();
//         $sql ="INSERT INTO profesionales (primernombre, segundonombre, primerapellido, segundoapellido, foto, cv) VALUES ('$this->primer_nombre', '$this->segundo_nombre', '$this->primer_apellido', '$this->segundo_apellido', '$this->foto', '$this->cv')";
//         echo $sql;
//         $consulta = $conexion->prepare($sql);
//         $consulta->execute();
//     }
// }

// class ValidarLogin {
//     private $correo;
//     private $contraseña;

//     const TABLA = 'usuarios';

//     public function __construct($correo,$contraseña)
//     {
//         $this->correo = $correo;
//         $this->contraseña = $contraseña;
//     }
//     public function validar(){
//         $conexion = new Conexion();
//         $sql ="SELECT * FROM usuarios WHERE correo = '$this->correo' AND contraseña = '$this->contraseña'";
//         echo $sql;
//         $consulta = $conexion->prepare($sql);
//         $result=$consulta->execute();
//         print($result);
//         print_r($result);
//         if ($result) {
//             // Inicio de sesión exitoso, redirecciona a la página de inicio
//             // print($result);
//             print_r($result);
            
//             // header("Location: index.php");
//         } else {
//             // Credenciales incorrectas, muestra un mensaje de error
//             echo "Usuario o contraseña incorrectos. <a href='login.php'>Volver al inicio de sesión</a>";
//         }
//     }
// }

// class Prueba {
//     private $nombres;

//     public function __construct($nombres){
//         $this->nombres = $nombres;
//     }

//     public function getNombre(){
//         return $this->nombres;
//     }
// }
?>
<?php
class Conexion extends PDO {
    private $tipo_de_base = 'mysql';
   private $host = 'localhost';	
   private $nombre_de_base = 'proyectopoo';
   private $usuario = 'root';
   private $contraseña = '';

   public function __construct() {
    try {

        parent::__construct($this->tipo_de_base. ':host='. $this->host. ';dbname='. $this->nombre_de_base, $this->usuario, $this->contraseña);

    } catch (PDOException $e) {

        echo 'Ha surgido un error y no se puede conectar a la base de datos.

        Error: '. $e->getMessage();

    }
 }
}

// $sevidor="localhost";
// $baseDeDatos="proyectopoo";
// $usuario="root";
// $contraseña="";

// try{
//     $conexion= new PDO("mysql:host=$sevidor;dbname=$baseDeDatos",$usuario,$contraseña);
// }catch(Exception $ex){
//     echo $ex->getMessage();
// }

?>
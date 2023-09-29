<?php require('./bd.php') ?>
<?php
class ValidarLogin {
    private $correo;
    private $contraseña;

    const TABLA = 'usuarios';

    public function __construct($correo,$contraseña)
    {
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }
    public function validar(){
        $conexion = new Conexion();
        $sql ="SELECT * FROM usuarios WHERE correo = '$this->correo' AND contraseña = '$this->contraseña'";
        // echo $sql;
        $consulta=$conexion->prepare($sql);
        $consulta->execute();
        $user = $consulta->fetchAll();
        if (!$user == null){
            session_start();
            header("Location: index.php");
        }else{
            echo "Usuario o contraseña incorrectos. <a href='login.php'>Volver al inicio de sesión</a>";
        }

        // $result=$conexion->query($sql);
        // print_r($result);
        // if ($result!=null) {
        //     print_r($result);
        //     // 
        // } else {
        //     // Credenciales incorrectas, muestra un mensaje de error
        //     echo "Usuario o contraseña incorrectos. <a href='login.php'>Volver al inicio de sesión</a>";
        // }
    }
}
?>
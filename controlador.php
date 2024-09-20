<?php
include("conexion.php");
if (!empty($_POST["inicio"])) {
    if (empty($_POST["nombre"]) and empty($_POST["password"])) {
        echo "los campos estan vacios";
    } else {
        $usuario=$_POST["nombre"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from usuarios where Nombre='$usuario' and Password='$clave'");

        if ($datos = $sql->fetch_object()) {
            header("Location: ../upload.html");
            exit(); 
        } else {
            echo "acceso denegado";
        }
    }
        
}
  

if (!empty($_POST["registrar"])) {
    if (empty($_POST["nombre"]) and empty($_POST["email"]) and empty($_POST["password"])) {
        echo "los campos estan vacios";
    } else {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $clave = $_POST['password'];
        $ent=$conexion->query("INSERT INTO usuarios (Nombre, Email, Password) VALUES ('$nombre', '$email', '$clave')");
        
        
        echo "Registro exitoso";
    }
        
}


?>
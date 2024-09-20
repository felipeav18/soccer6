<?php
    $conexion = mysqli_connect("localhost", "u379243797_imagenes", "Imagenes123admin", "u379243797_tubasededatos") or die("Error de conexión");

    $id = $_POST['id'];
    $nombre_archivo = $_FILES['imagen']['name'];
    $archivo = $_FILES['imagen']['tmp_name'];

    $ruta = "uploads/". $nombre_archivo;
    $base_datos = "uploads/". $nombre_archivo;

    if (move_uploaded_file($archivo, $ruta)){
        $insertar = mysqli_query($conexion, "UPDATE imagenes SET ruta = '$base_datos' WHERE id='$id'");

        if ($insertar){
            echo 
            '
            <script>
                alert("El archivo fue actualizado correctamente");
                window.history.back();
            </script>
            ';
        } else {
            echo '
            <script>
            alert("Hubo un error en la consulta: '. mysqli_error($conexion) . '");
            window.history.back();
            </script>
            ';
        }
    } else {
        echo "Error al mover el archivo.<br>";
    }
    ?>
<?php
// Establecer la conexión a la base de datos
$conexion = mysqli_connect("localhost", "u379243797_imagenes", "Imagenes123admin", "u379243797_tubasededatos") or die("Error de conexión");

// Consultar las rutas de las imágenes
$query = "SELECT ruta FROM imagenes";
$resultado = mysqli_query($conexion, $query);

$rutas_imagenes = [];

// Llenar el array con las rutas de las imágenes
while ($fila = mysqli_fetch_assoc($resultado)) {
    $rutas_imagenes[] = htmlspecialchars($fila['ruta']);
}

// Asegurarse de que el array tenga 6 elementos
while (count($rutas_imagenes) < 6) {
    $rutas_imagenes[] = ''; // Rellenar con cadenas vacías si hay menos de 6 imágenes
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Definir variables para cada imagen
$ruta_imagen1 = $rutas_imagenes[0];
$ruta_imagen2 = $rutas_imagenes[1];
$ruta_imagen3 = $rutas_imagenes[2];
$ruta_imagen4 = $rutas_imagenes[3];
$ruta_imagen5 = $rutas_imagenes[4];
    $ruta_imagen6 = $rutas_imagenes[5];
?>
<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "u379243797_imagenes", "Imagenes123admin", "u379243797_tubasededatos");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener las imágenes de la base de datos
$sql = "SELECT ruta FROM imagenes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div>";
    while ($row = $result->fetch_assoc()) {
        echo "<img src='" . $row['ruta'] . "' style='max-width: 200px; margin: 10px;'>";
    }
    echo "</div>";
} else {
    echo "No hay imágenes para mostrar.";
}

$conn->close();
?>

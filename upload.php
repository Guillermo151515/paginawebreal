<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {
    $carpeta = 'uploads/';

    if (!is_dir($carpeta)) {
        mkdir($carpeta, 0755, true);
    }

    $archivo = $_FILES['imagen'];
    $nombreTmp = $archivo['tmp_name'];
    $nombreOriginal = basename($archivo['name']);
    $extension = strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));

    $extPermitidas = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($extension, $extPermitidas)) {
        $nuevoNombre = uniqid('img_') . '.' . $extension;
        $rutaDestino = $carpeta . $nuevoNombre;

        if (move_uploaded_file($nombreTmp, $rutaDestino)) {
            header('Location: index.php?success=1');
            exit;
        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "Tipo de archivo no permitido. Solo jpg, jpeg, png, gif.";
    }
} else {
    echo "No se envió ninguna imagen.";
}
?>

<?php
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {
    $carpeta = 'imagenes/';
    if (!is_dir($carpeta)) {
        mkdir($carpeta, 0755, true);
    }

    $nombreArchivo = basename($_FILES['imagen']['name']);
    $rutaDestino = $carpeta . $nombreArchivo;

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        $mensaje = "Imagen subida correctamente: <a href='$rutaDestino'>$nombreArchivo</a>";
    } else {
        $mensaje = "Error al subir la imagen.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Subir Imagen con PHP</title>
</head>
<body>
  <h1>Subir Imagen</h1>
  <?php if($mensaje): ?>
    <p><?php echo $mensaje; ?></p>
  <?php endif; ?>

  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="imagen" accept="image/*" required />
    <button type="submit">Subir</button>
  </form>

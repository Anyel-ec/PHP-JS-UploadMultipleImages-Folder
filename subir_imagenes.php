<?php
if(isset($_POST["submit"])) {
    $cantidadImagenes = 6;

    for($i = 1; $i <= $cantidadImagenes; $i++) {
        if(isset($_FILES["imagen" . $i])) {
            $nombreArchivo = $_FILES["imagen" . $i]["name"];
            $tipoArchivo = $_FILES["imagen" . $i]["type"];
            $tamanoArchivo = $_FILES["imagen" . $i]["size"];
            $tempArchivo = $_FILES["imagen" . $i]["tmp_name"];
            $errorArchivo = $_FILES["imagen" . $i]["error"];

            $directorioDestino = "img/"; // Carpeta donde se guardará la imagen
            if(move_uploaded_file($tempArchivo, $directorioDestino . $nombreArchivo)) {
                echo "La imagen $i se ha subido correctamente.<br>";
            } else {
                echo "Error al subir la imagen $i.<br>";
            }
        }
    }
}


<?php
// Verificar si se ha enviado alguna imagen
function crearCarpeta($carpeta)
{
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
}

if (isset($_FILES['imagen'])) {
    // Obtener la cantidad de imágenes recibidas
    $totalImagenes = count($_FILES['imagen']['name']);
    $carpeta = $_POST["carpeta"];
    $categoria = $_POST["categoria"];

    crearCarpeta("../imagenes/" .$carpeta . "/" . $categoria);

    // Recorrer cada imagen recibida
    try {
        for ($i = 0; $i < $totalImagenes; $i++) {
            $nombreImagen = $_FILES['imagen']['name'][$i];
            $tmpImagen = $_FILES['imagen']['tmp_name'][$i];
            $rutaDestino = "../imagenes/" .$carpeta ."/". $categoria . "/" . $nombreImagen;

            $rutas[] = $nombreImagen;
    
            // Mover la imagen a la carpeta de destino
            move_uploaded_file($tmpImagen, $rutaDestino);
            
        }
        echo json_encode($rutas);
    } catch (\Throwable $th) {
        echo $th;
    }
   
}

// Enviar respuesta al cliente si es necesario
?>

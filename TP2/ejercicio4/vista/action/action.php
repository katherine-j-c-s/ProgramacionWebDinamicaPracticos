<?php

include_once "../../../utils/funciones.php";

$datos = darDatosSubmitted();

$restricciones = "";

if (isset($datos["1"])) {
    $restricciones= "Todo Público";
} else if (isset($datos["2"])) {
    $restricciones= "Mayores de 7 años";
} else if (isset($datos["3"])) {
    $restricciones= "Mayores de 18";
}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class=".container-sm justify-content-center alert alert-success" role="alert">
                <h1>La película introducida es</h1>
                <p><strong>Título:</strong> <?php echo $datos["titulo"]; ?></p>
                <p><strong>Director:</strong> <?php echo $datos["director"]; ?></p>
                <p><strong>Producción:</strong> <?php echo $datos["produccion"]; ?></p>
                <p><strong>Nacionalidad:</strong> <?php echo $datos["nacionalidad"]; ?></p>
                <p><strong>Actores:</strong> <?php echo $datos["actores"]; ?></p>
                <p><strong>Guión:</strong> <?php echo $datos["guion"]; ?></p>
                <p><strong>Año:</strong> <?php echo $datos["anio"]; ?></p>
                <p><strong>genero:</strong> <?php echo $datos["genero"];; ?></p>
                <p><strong>Duración:</strong> <?php echo $datos["duracion"]; ?></p>
                <p><strong>Restricciones:</strong> <?php echo $restricciones; ?></p>
                <button type="buttom" class="btn btn-primary">
                    <a class="text-decoration-none text-white" href="../ejercicio4.php">volver</a>
                </button>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
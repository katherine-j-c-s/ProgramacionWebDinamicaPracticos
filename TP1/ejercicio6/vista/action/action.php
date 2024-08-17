<?php

include_once "../../../utils/funciones.php";
include_once "../../control/CrearTexto.php";

$datos = darDatosSubmitted();
$obj = new CrearTexto();
$resut = $obj->presentar($datos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver resultado</title>
    <link rel="stylesheet" href="../../../utils/styles.css">
</head>
<body>
    <h1>texto</h1>
    <h2><?php echo $resut[0]; ?></h2>
    <p><?php echo $resut[1]; ?></p>
    <a href="../ejercicio6.php">Volver atras</a>
</body>
</html>
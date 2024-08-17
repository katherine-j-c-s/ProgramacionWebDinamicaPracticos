<?php

include_once "../../../utils/funciones.php";
include_once "../../control/CalcularEntrada.php";

$datos = darDatosSubmitted();
$obj = new CalcularEntrada();
$resut = $obj->calcular($datos);
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
    <p><?php echo "Su entrada esta en " . $resut . " pesos:"; ?></p>
    <a href="../ejercicio8.php">Volver atras</a>
</body>
</html>
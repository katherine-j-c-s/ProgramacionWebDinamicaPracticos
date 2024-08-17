<?php

include_once "../../../utils/funciones.php";
include_once "../../control/CalcHoras.php";

$horas = darDatosSubmitted();
$obj = new CalcHoras();
$resut = $obj->calcular($horas);
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
    <h1>Ver cantidad de horas cursadas</h1>
    <p><?php echo "cantidad de horas: " . $resut; ?></p>
    <a href="../ejercicio2.php">Volver atras</a>
</body>
</html>
<?php

include_once "../../../utils/funciones.php";
include_once "../../control/Calcular.php";

$datos = darDatosSubmitted();
$obj = new Calcular();
$resut = $obj->Calculo($datos);
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
    <h2><?php echo "el calculo que hicimos fue " . $resut[0] ; ?></h2>
    <p><?php echo $resut[1]; ?></p>
    <a href="../ejercicio7.php">Volver atras</a>
</body>
</html>
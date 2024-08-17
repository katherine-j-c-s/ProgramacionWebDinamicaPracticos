<?php
// Ejercicio 4
// Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
// esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
// persona es mayor de edad o no; (si la edad es mayor o igual a 18).
// Enviar los datos usando el método GET y luego probar de modificar los datos
// directamente en la url para ver los dos posibles mensajes.

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h2>Consigna</h2>
    <p>
        Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
        esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
        persona es mayor de edad o no; (si la edad es mayor o igual a 18).
        Enviar los datos usando el método GET y luego probar de modificar los datos
        directamente en la url para ver los dos posibles mensajes.
    </p>
    <h2>Solución</h2>
    <form action="./action/action.php" method="get">
        <label for="nombre">Ingrese nombre</label>
        <input required type="text" name="nombre" id="nombre" >
        <label for="apellido">Ingrese apellido</label>
        <input required type="text" name="apellido" id="apellido" >
        <label for="edad">Ingrese edad</label>
        <input required type="number" name="edad" id="edad" >
        <label for="direccion">Ingrese direccion</label>
        <input required type="text" name="direccion" id="direccion" >
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
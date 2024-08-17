<?php
// Ejercicio 3
// Crear una página php que contenga un formulario HTML como el que se indica en la
// imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
// que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
// nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
// Cambiar el método Post por Get y analizar las diferencias

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h2>Consigna</h2>
    <p>
        Crear una página php que contenga un formulario HTML como el que se indica en la
        imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
        que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
        nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
        Cambiar el método Post por Get y analizar las diferencias
    </p>
    <h2>Solución</h2>
    <form action="./action/action.php" method="post">
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
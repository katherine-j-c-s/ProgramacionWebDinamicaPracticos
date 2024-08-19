<?php
// Ejercicio 2
// Crear una página php que contenga un formulario HTML que permita ingresar las horas
// de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
// Enviar los datos del formulario por el método Get a otra página php que los reciba y
// complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
// se cursan por semana
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/styles.css">
    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
    <!-- Incluir CSS para estilos opcionales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/themes/smoothness/jquery.validate.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <h2>Consigna</h2>
    <p>
        Crear una página php que contenga un formulario HTML que permita ingresar las horas
        de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
        Enviar los datos del formulario por el método Get a otra página php que los reciba y
        complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
        se cursan por semana
    </p>
    <h2>Solución</h2>
    <form id="miFormulario" action="./action/action.php" method="get">
        <label for="horasL">Ingrese cantidad de horas de cursada para el dia <strong> lunes</strong></label>
        <input type="number" name="horasL" id="horasL" >
        <label for="horasMt">Ingrese cantidad de horas de cursada para el dia <strong> martes</strong></label>
        <input type="number" name="horasMt" id="horasMt" >
        <label for="horasMc">Ingrese cantidad de horas de cursada para el dia <strong> miercoles</strong></label>
        <input type="number" name="horasMc" id="horasMc" >
        <label for="horasJ">Ingrese cantidad de horas de cursada para el dia <strong> jueves</strong></label>
        <input type="number" name="horasJ" id="horasJ" >
        <label for="horasV">Ingrese cantidad de horas de cursada para el dia <strong> viernes</strong></label>
        <input type="number" name="horasV" id="horasV" >
        <button type="submit">Enviar</button>
    </form>
    <script src="../../../utils/validacion.js"></script>
</body>
</html>
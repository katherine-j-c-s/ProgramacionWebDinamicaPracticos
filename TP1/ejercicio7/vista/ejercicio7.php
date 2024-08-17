<?php

// Ejercicio 7
// Crear una página con un formulario que contenga dos input de tipo text y un select. En
// los inputs se ingresarán números y el select debe dar la opción de una operación
// matemática que podrá resolverse usando los números ingresados. En la página que
// procesa la información se debe mostrar por pantalla la operación seleccionada, cada
// uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
// formulario:

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../utils/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <h2>Consigna</h2>
    <p>
        Crear una página con un formulario que contenga dos input de tipo text y un select. En
        los inputs se ingresarán números y el select debe dar la opción de una operación
        matemática que podrá resolverse usando los números ingresados. En la página que
        procesa la información se debe mostrar por pantalla la operación seleccionada, cada
        uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
        formulario:
    </p>
    <h2>Solución</h2>
    <form action="./action/action.php" method="get">

        <input required type="number" name="num1" id="num1" >
        <input required type="number" name="num2" id="num2" >

        <select name="calcular" required id="calcular">
            <option value="calcular">calcular</option>
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>
        </select>
        
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
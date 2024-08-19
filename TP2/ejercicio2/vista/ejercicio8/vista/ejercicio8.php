<?php

// Ejercicio 8
// La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
// función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
// clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
// es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
// de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
// formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
// un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
// Agregar un botón para limpiar el formulario y volver a consultar.

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <h2>Consigna</h2>
    <p>
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
        Agregar un botón para limpiar el formulario y volver a consultar.
    </p>
    <h2>Solución</h2>
    <form action="./action/action.php" method="get">
        
        <label for="estudia">Sos estudiante?</label>

        <br>

        <div name="estudia" class="checkRadio">
            <input type="radio" name="si" id="si">
            <label for="si">si</label>
        </div>
        <div name="estudia" class="checkRadio">
            <input type="radio" name="no" id="no">
            <label for="no">no</label>
        </div>
        
        <br>
        
        <label for="edad">Qué edad tienes?</label>
        <input required type="number" name="edad" id="edad" >

        <button type="submit">Enviar</button>

    </form>
</body>
</html>
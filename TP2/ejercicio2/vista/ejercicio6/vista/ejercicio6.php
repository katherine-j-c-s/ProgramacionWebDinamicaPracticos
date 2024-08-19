<?php

// Ejercicio 6
// Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
// deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
// que procesa el formulario la cantidad de deportes que practica.

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <h2>Consigna</h2>
    <p>
        Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
        deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
        que procesa el formulario la cantidad de deportes que practica.
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
        
        <select required name="sexo" id="sexo">
            <option value="escojer">sexo</option>
            <option value="femenino">femenino</option>
            <option value="masculino">masculimo</option>
        </select>
        
        <br>
        
        <label for="estudios">Cuál es tu nivel de estudios?</label>

        <br>

        <div name="estudios" class="checkRadio">
            <input type="radio" name="ninguno" id="ninguno">
            <label for="ninguno">no tiene estudios</label>
        </div>
        <div name="estudios" class="checkRadio">
            <input type="radio" name="primario" id="primario">
            <label for="primario">estudios primarios</label>
        </div>
        <div name="estudios" class="checkRadio">
            <input type="radio" name="secundario" id="secundario">
            <label for="secundario">estudios secundarios</label>
        </div>
        
        <br>
        
        <label for="deporte">Qué deportes practicas?</label>

        <br>
        <div name="deporte" class="checkRadio">
            <input type="checkbox" name="futbol" id="futbol">
            <label for="futbol">futbol</label>
        </div>
        <div name="deporte" class="checkRadio">
            <input type="checkbox" name="basket" id="basket">
            <label for="basket">basket</label>
        </div>
        <div name="deporte" class="checkRadio">
            <input type="checkbox" name="tennis" id="tennis">
            <label for="tennis">tennis</label>
        </div>
        <div name="deporte" class="checkRadio">
            <input type="checkbox" name="voley" id="voley">
            <label for="voley">voley</label>
        </div>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>
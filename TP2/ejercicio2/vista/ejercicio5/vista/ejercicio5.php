<?php
// Ejercicio 5
// Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
// “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
// estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
// apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
// un mensaje que indique el tipo de estudios que posee y su sexo.

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="../../../utils/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <h2>Consigna</h2>
    <p>
        Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
        “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
        estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
        apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
        un mensaje que indique el tipo de estudios que posee y su sexo.
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
        
        <select name="sexo" id="sexo">
            <option value="escojer">sexo</option>
            <option value="femenino">femenino</option>
            <option value="masculino">masculimo</option>
        </select>
        
        <br>

        <div class="checkRadio">
            <input type="radio" name="ninguno" id="ninguno">
            <label for="ninguno">no tiene estudios</label>
        </div>
        <div class="checkRadio">
            <input type="radio" name="primario" id="primario">
            <label for="primario">estudios primarios</label>
        </div>
        <div class="checkRadio">
            <input type="radio" name="secundario" id="secundario">
            <label for="secundario">estudios secundarios</label>
        </div>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>
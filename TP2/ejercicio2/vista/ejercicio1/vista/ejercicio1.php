<?php
//Ejercicio1
// Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
// llamar a un script vernumero.php y visualizar un mensaje que indique si el número
// enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
// respuesta, que permita volver a la página anterior.  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>Ejercicio 1</h1>
    <h2>Consigna</h2>
    <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
    llamar a un script "vernumero.php" y visualizar un mensaje que indique si el número
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
    respuesta, que permita volver a la página anterior.
    </p>
    <h2>Solución</h2>
    <form id="miFormulario" action="./action/action.php" method="post">
        <label for="number">Ingrese un número</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Enviar</button>
    </form>
    <script src="../../../utils/validacion.js"></script>
</body>
</html>
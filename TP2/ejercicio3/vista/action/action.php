<?php

include_once "../../../utils/funciones.php";

$datos = darDatosSubmitted();
$usuario = $datos["usuario"];
$clave = $datos["clave"];

// Validar datos
$isValid = true;
$usuarioError = "";
$claveError = "";

if (empty($usuario)) {
    $usuarioError = "El usuario es requerido.";
    $isValid = false;
}

if (empty($clave)) {
    $claveError = "La contraseña es requerida.";
    $isValid = false;
}else if ($clave === $usuario) {
    $claveError = "La contraseña no puede ser igual al nombre de usuario.";
    $isValid = false;
} else if (!preg_match('/[a-zA-Z]/', $clave) || !preg_match('/\d/', $clave)) {
    $claveError = "La contraseña debe contener letras y números.";
    $isValid = false;
}

$usuarios = [
    ["usuario" => "admin", "clave" => "admin123"],
    ["usuario" => "user", "clave" => "user123"]
];

// Si los datos son válidos, verificar en el arreglo de usuarios

if ($isValid) {

    $encontrado = false;

    foreach ($usuarios as $usuario_valido) {
        if ($usuario_valido["usuario"] === $usuario && $usuario_valido["clave"] === $clave) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado) {
        header('Location: ./inicio.php?usuario=' . urlencode($usuario));
        exit();
    } else {
        // Redirigir a login.php con el mensaje de error
        header('Location: ../ejercicio3.php?usuarioError=El usuario no se encuentra registrado');
        exit();
    }
} else {
    // Redirigir a login.php con los errores
    header('Location: ../ejercicio3.php?usuarioError=' . urlencode($usuarioError) . '&claveError=' . urlencode($claveError) . '&usuario=' . urlencode($usuario) . '&clave=' . urlencode($clave));
    exit();
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class=".container-sm justify-content-center flex-column">
            <h1 class="text-center">Ejercicio 3</h1>
            <h2>Consigna</h2>
            <ol>
                <li class="mt-5">
                    Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                    y la password para loguearse. Los datos del formulario son enviados a un script
                    verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                    arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                    de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                    y en caso contrario un mensaje de error. 
                </li>
                <li class="mt-5">
                    Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
                    usuario y la contraseña antes de ser enviados al servidor sino que también debe
                    realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
                    caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
                    letras y números). 
                </li>
                <li class="mt-5">
                    Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar al siguiente:
                </li>
            </ol> 
        </div>
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Solución
        </button>

        <!-- Modal HTML -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="modal-body" action="action/action.php" method="post">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control <?php echo !empty($_GET['usuarioError']) ? 'is-invalid' : ''; ?>" id="usuario" name="usuario" value="<?php echo htmlspecialchars($_GET['usuario'] ?? ''); ?>" >
                            <?php if (!empty($_GET['usuarioError'])): ?>
                                <div class="invalid-feedback"><?php echo htmlspecialchars($_GET['usuarioError']); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="clave">Contraseña:</label>
                            <input type="password" class="form-control <?php echo !empty($_GET['claveError']) ? 'is-invalid' : ''; ?>" id="clave" name="clave" maxlength="8" value="<?php echo htmlspecialchars($_GET['clave'] ?? ''); ?>" >
                            <?php if (!empty($_GET['claveError'])): ?>
                                <div class="invalid-feedback"><?php echo htmlspecialchars($_GET['claveError']); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn mx-auto d-block btn-primary">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

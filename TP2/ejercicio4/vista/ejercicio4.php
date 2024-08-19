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
            <h1 class="text-center">Ejercicio 4</h1>
            <h2>Consigna</h2>
            <p>Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
            tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras. </p>
            <p>Aplicar Bootstrap y validar los siguiente:</p>
            <ul>
                <li class="mt-2">
                    El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y soloaceptar números.
                </li>
                <li class="mt-2">
                    El campo duración debe permitir un máximo de 3 números.
                </li>
                <li class="mt-2">
                    Todos los datos son obligatorios
                </li>
                <li class="mt-2">
                    Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el formulario.
                </li>
                <li class="mt-2">
                    El botón “Borrar” debe limpiar el formulario.
                </li>
            </ul> 
        </div>
        <!-- Botón para abrir el modal -->
        <h2 class="text-center">solucion</h2>
        <div class="card mb-5">
            <form class="card-body" action="action/action.php" method="post">
                <div class="form-group flex-column">
                    <div class="d-flex justify-content-around w">
                        <div class="flex-column w-50 mx-3">
                            <label for="titulo">Título:</label>
                            <input required value="Título" type="text" class="form-control mb-3" id="titulo" name="titulo">
                            <label for="director">Director:</label>
                            <input required value="Director" type="text" class="form-control mb-3" id="director" name="director" >
                            <label for="produccion">Producción:</label>
                            <input required value="Producción" type="text" class="form-control mb-3" id="produccion" name="produccion" >
                            <label for="nacionalidad">Nacionalidad:</label>
                            <input required value="Nacionalidad" type="text" class="form-control mb-3" id="nacionalidad" name="nacionalidad" >
                        </div>
                        <div class="flex-column w-50 mx-3 ">
                            <label for="actores">Actores:</label>
                            <input required value="Actores" type="text" class="form-control mb-3" id="actores" name="actores" >
                            <label for="guion">Guión:</label>
                            <input required value="Guión" type="text" class="form-control mb-3" id="guion" name="guion" >
                            <label for="anio">Año:</label>
                            <input required value="Año" type="number" class="form-control mb-3" id="anio" name="anio" maxlength="4">
                            <label for="genero">Género:</label>
                            <select required class="form-select" name="genero">
                                <option selected>Elegir</option>
                                <option name="Femenino" value="Femenino">Femenino</option>
                                <option name="Masculino" value="Masculino">Masculino</option>
                                <option name="Otro" value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-inline-flex">
                        <div class="flex-column mx-3">
                            <label for="duracion">Duración:</label>
                            <input required value="duracion" type="number" class="form-control mb-3" id="duracion" maxlength="3" name="duracion" >
                        </div>
                        <div>
                            <p>Restricciones de edad</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="1" id="1">
                                <label class="form-check-label" for="1">
                                    Todo Público
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="2" id="2">
                                <label class="form-check-label" for="2">
                                    Mayores de 7 años
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="3" id="3">
                                <label class="form-check-label" for="3">
                                    Mayores de 18
                                </label>
                            </div>
                        </div>
                    </div>
                    <textarea required class="form-control mx-3" autocomplete="off" name="sinopsis" id="sinopsis" value="sinopsis"></textarea>
                </div>
                <div class="modal-footer my-3">
                    <button type="submit" name="submit_button" class="btn btn-primary">enviar</button>
                    <button type="submit" name="reset_button" class="btn btn-secundary">
                        <a class="text-decoration-none " href="./ejercicio4.php">borrar</a>
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Modal HTML -->
    </div>

    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

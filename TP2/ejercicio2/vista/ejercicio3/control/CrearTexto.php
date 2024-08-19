<?php

class CrearTexto {
    public function presentar($datos){
        $texto = "Hola, yo soy " . $datos['nombre'] . " , " . $datos['apellido'] . " tengo " . $datos['edad'] . " años y vivo en " . $datos['direccion'];
        return $texto;
    }
}
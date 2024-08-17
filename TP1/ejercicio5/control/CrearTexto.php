<?php

class CrearTexto {
    public function presentar($datos){
        $mayorEdad = "todavia eres un nene :(";
        if($datos["edad"] >= 18){
            $mayorEdad = "Eres un adulto independiente :D";
        }
        $texto = "Hola, yo soy " . $datos['nombre'] . " , " . $datos['apellido'] . " tengo " . $datos['edad'] . " años y vivo en " . $datos['direccion'];
        $result = [$mayorEdad, $texto];
        return $result;
    }
}
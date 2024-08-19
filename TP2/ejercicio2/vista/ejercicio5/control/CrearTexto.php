<?php

class CrearTexto {
    public function presentar($datos){
        $mayorEdad = "todavia eres un nene :(";
        if($datos["edad"] >= 18){
            $mayorEdad = "Eres un adulto independiente :D";
        }
        $estudios = "ninguno";
        if (isset($datos["secundario"])) {
            $estudios = "secundario";
        }else if (isset($datos["primario"])) {
            $estudios = "primario";
        }
        $texto = "Hola, yo soy " . $datos['nombre'] . 
        " , " . $datos['apellido'] . 
        " tengo " . $datos['edad'] . 
        " años y vivo en " . $datos['direccion'] . 
        " mi sexo es " . $datos["sexo"] .
        " y mi nivel academico es ". $estudios;
        $result = [$mayorEdad, $texto];
        return $result;
    }
}
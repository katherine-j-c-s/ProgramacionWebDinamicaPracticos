<?php

class CrearTexto {
    public function presentar($datos){
        // print_r($datos);
        
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

        $deportes = [];
        if (isset($datos["futbol"])) {
            array_push($deportes,"futbol");
        }
        if (isset($datos["basket"])) {
            array_push($deportes,"basket");
        }
        if (isset($datos["tennis"])) {
            array_push($deportes,"tennis");
        }
        if (isset($datos["voley"])) {
            array_push($deportes,"voley");
        }
        
        $texto = "Hola, yo soy " . $datos['nombre'] . 
        " , " . $datos['apellido'] . 
        " tengo " . $datos['edad'] . 
        " años y vivo en " . $datos['direccion'] . 
        " mi sexo es " . $datos["sexo"] .
        " y mi nivel academico es ". $estudios .
        "\n los deportes que practico son:";
        foreach ($deportes as $value) {
            $texto .= " ". $value .",";
        }
        $texto = substr($texto, 0, -1); // Elimina el último carácter
        $result = [$mayorEdad, $texto];
        return $result;
    }
}
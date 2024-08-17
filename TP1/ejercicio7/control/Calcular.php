<?php

class Calcular {
    public function calculo($datos){

        // print_r($datos);
        $result = 0;
        $tipoCalculo = "ninguno";

        switch ($datos["calcular"]) {
            case 'suma':
                $result = $datos["num1"] + $datos["num2"];
                $tipoCalculo = "suma";
                break;
            case 'resta':
                $result = $datos["num1"] - $datos["num2"];
                $tipoCalculo = "resta";
                break;
            case 'multiplicacion':
                $result = $datos["num1"] * $datos["num2"];
                $tipoCalculo = "multiplicacion";
                break;
            case 'division':
                $result = $datos["num1"] / $datos["num2"];
                $tipoCalculo = "division";
                break;
        }
        

        $texto = "El resultado del calculo es: " . $result;
        $enviar = [$tipoCalculo, $texto];
        return $enviar;
    }
}
<?php

class CalcularEntrada {
    public function calcular($datos){
        $result = 300;

        if (isset($datos["si"])) {
            if ($datos["edad"] <= 12) {
                $result = 160;
            }else if ($datos["edad"] >= 12) {
                $result = 180;
            }
        }

        return  $result;
    }
}
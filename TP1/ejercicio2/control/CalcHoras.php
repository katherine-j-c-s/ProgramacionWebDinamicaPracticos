<?php

class CalcHoras {
    public function calcular($horas){
        $result = 0;
        foreach ($horas as $num) {
            $result += intval($num);
        }
        return $result;
    }
}
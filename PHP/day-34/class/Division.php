<?php

class Division {

    public function div($firstValue, $secondValue) {
        if ($secondValue == 0) {
            $div = "Undefined";
            return $div;
        } else {
            $div = $firstValue / $secondValue;
            return $div;
        }
    }

}

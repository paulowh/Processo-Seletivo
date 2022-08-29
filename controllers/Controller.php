<?php

function verificarArray()
{
    $array = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $convertArray = array();

    if (isset($array)) {
        foreach ($array as $value) {
            $cont = 0;
            for ($i = 0; $i < count($array); $i++) {
                if ($value == $array[$i]) {
                    $cont += 1;
                }
            }
            if ($cont == 1) {
                if ($value % 2 != 0) {
                    if (!in_array($value, $convertArray)) {
                        $convertArray[] = $value;
                    }
                }
            }
        }
        unset($value);

        echo 'Resultado: ';
        foreach ($convertArray as $value) {
            echo  $value . ' | ';
        }
    }

}
verificarArray();

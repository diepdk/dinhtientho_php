<?php$array = [1, 23, 32, 5, 43, 321, 312, 352, 2, 13, 153, 21, 32, 1];$max = null;$max2 = null;for ($i = 0; $i < count($array); $i++) {    if ($max == null) {        $max = $array[0];        $max2 = $array[0];    } else {        if ($array[$i] > $max) {            $max2 = $max;            $max = $array[$i];        }    }}echo $max + $max2;?>
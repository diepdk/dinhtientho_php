<?php
$n = 3;
$array = array(11, 2, 8, 10, 5, 99, 1, 8, 9);
$result;
for ($i = 0; $i < n * 3; $i++) {
    if ($i % 3 == 0) {
        for ($k = 0; $k < $n; $k++) {
            $result[$k] = $array[$i];
        }
    } else {
        if ($i % 3 == 1) {
            for ($k = $n + 1; $k < 2 * $n; $k++) {
                $result[$k] = $array[$i];
            }
        } else {
            for ($k = 2 * $n + 1; $k < 3 * $n; $k++) {
                $result[$k] = $array[$i];
            }
        }
    }
}
?>
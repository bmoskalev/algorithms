<?php
$array = [];
$N = 1000;
if ($N == 0) {
    echo "Пропущеннео число 1" . PHP_EOL;
} else {
    $rand = random_int(1, $N + 1);
    echo "Пропущеннео число $rand" . PHP_EOL;
    for ($i = 1; $i < $N + 1; $i++) {
        if ($i < $rand) {
            $array[$i] = $i;
        } else {
            $array[$i] = $i + 1;
        }
        echo $array[$i] . PHP_EOL;
    }
    $min = 1;
    $max = $N;
    $count = 0;
    while ($max - $min > 3) {
        $min1 = floor($min + ($max - $min) / 3);
        $max1 = floor($min + 2 * ($max - $min) / 3);
        $sumArr = $array[$min1] + $array[$max1];
        $sumInd = $min1 + $max1;
        if ($sumArr == $sumInd) {
            $min = $max1;
        } elseif ($sumArr == $sumInd + 1) {
            $min = $min1;
            $max = $max1;
        } else {
            $max = $min1;
        }
        $count++;
    }
    $found = false;
    for ($i = $min; $i <= $max; $i++) {
        if ($array[$i] != $i) {
            echo "Искомое число равно $i" . PHP_EOL;
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "Искомое число равно " . ($max + 1) . PHP_EOL;
    }
}
echo "Число итераций равно $count" . PHP_EOL;

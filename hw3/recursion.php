<?php
$array = [];
$N = 1000;
$rand = random_int(0, $N);
echo "Пропущеннео число $rand" . PHP_EOL;
for ($i = 1; $i < $N; $i++) {
    if ($i < $rand) {
        $array[$i] = $i;
    } else {
        $array[$i] = $i + 1;
    }
    echo $array[$i] . PHP_EOL;
}
$min = 0;
$max = $N - 1;
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
for ($i = $min; $i <= $max; $i++) {
    if ($array[$i] != $i) {
        echo "Искомое число равно $i" . PHP_EOL;
        break;
    }
}
echo "Число итераций равно $count" . PHP_EOL;

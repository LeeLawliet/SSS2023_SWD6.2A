<?php

function SumEvenNumbers($arr)
{
    $sum = 0;

    foreach ($arr as $num)
    {
        $num % 2 == 0 ? $sum += $num : $sum;
    }

    echo $sum;
}

$numbers = [2, 4, 6, 3, 8, 7];
SumEvenNumbers($numbers);
?>
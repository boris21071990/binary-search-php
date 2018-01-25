<?php

function binarySearch($values, $value)
{
    $beginOfArray = 0;

    $endOfArray = count($values) - 1;

    while($beginOfArray <= $endOfArray)
    {
        $middleOfArray = floor(($beginOfArray + $endOfArray) / 2);

        if($values[$middleOfArray] == $value)
        {
            return $middleOfArray;
        }
        elseif($values[$middleOfArray] > $value)
        {
            $endOfArray = $middleOfArray - 1;
        }
        else
        {
            $beginOfArray = $middleOfArray + 1;
        }
    }

    return 'Not found';
}

echo binarySearch([1, 2, 3, 4, 7, 8, 9, 12, 24, 35, 77], 7) . "\n";
<?php

function getNumRow($start = 0, $stop = 100, $divide = 3)
{
    $i = $start;
    $b = '';

    while ($i <= $stop) {
        if ($i % $divide === 0) {
            $b .= $i . ' ';
        }
        $i++;
    }
    return $b;
}
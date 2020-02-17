<?php

$i = 0;
do{
    if ($i == 0){
        echo "<p>$i - это ноль.</p>";
    } elseif (is_float($i / 2)){
        echo "<p>$i - нечетное число</p>";
    } else {
        echo "<p>$i - четное число</p>";
    }
    $i++;
} while ($i <= 10);
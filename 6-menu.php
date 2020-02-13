<?php

$arr_menu = [
    'Задание 1' => '#1',
    'Задание 2' => '#2',
    'Задание 3' => '#3',
    'Задание 4' => '#4',
    'Задание 5' => '#5',
    'Задание 6' => '#6',
    'Задание *' => [
        'Задание7' => '#7',
        'Задание8' => '#8',
        'Задание9' => '#9',
    ],
];

echo '<ul class="main-menu">';
foreach ($arr_menu as $key => $value)
{
    if (!is_array($value))
    {
        echo '<li><a href="' . $value . '">' . $key . '</a></li>';
    } else
    {
        echo '<li><a href="#">' . $key . '&darr;</a><ul class="main-sub-menu">';

        foreach ($value as $sub_key => $sub_value)
        {
            echo '<li><a href="' . $sub_value . '">' . $sub_key . '</a></li>';
        }

        echo '</ul></li>';
    }
}
echo '</ul>';
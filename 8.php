<?php

foreach ($regions as $my_key => $my_value){
    echo $my_key . ' область:<br>';
    $cities = '';
    foreach ($my_value as $city) {
        if (mb_substr($city, 0, 1) === 'К')
        {
            $cities .= $city . ', ';
        }
    }
    echo substr_replace($cities,'.<br>',-2);
}
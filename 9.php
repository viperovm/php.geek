<?php
echo '<p>' . $str . '</p>';
function getUrlFromStr($str, $arr)
{
    return mb_strtolower(str_replace(' ', '_', getTranslite($str, $arr)));
}

echo '<p>' . getUrlFromStr($str, $arr) . '</p>';
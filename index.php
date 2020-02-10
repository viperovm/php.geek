<?php

$year = date('Y');
$title = 'Вторая домашка)';
$heading = 'Вторая домашняя работа от 10.02.' . $year . 'г.';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $heading ?></h1>
<h3>1. Две целочисленные переменные и скрипт.</h3>
<p><pre>
        <code>
            &lt;?php
                $a = 5;
                $b = 3;
                if ($a >= 0 && $b >= 0) {
                    echo $a - $b;
                } else if ($a < 0 && $b < 0) {
                    echo $a * $b;
                } else if (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
                    echo $a + $b;
                }
            ?&gt;
        </code>
    </pre>
</p>

<?php

// Рабочий php код

$a = 5;
$b = 3;
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else if (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo $a + $b;
}

?>

<h3>2. Переменная $а и оператор switch.</h3>
<p><pre>
        <code>
            &lt;?php
                $a = 5;
                switch($a){
                    case $a < 15:
                        for($i = $a; $i <= 15; $i++){
                            echo $i . '&lt;br&gt;';
                        }
                    break;
                default:
                    echo 'Введите число меньше 15';
                    break;
                }
            ?&gt;
        </code>
    </pre>
</p>

<?php

// Рабочий php код

$a = 5;
switch($a){
    case $a < 15:
        for($i = $a; $i <= 15; $i++){
            echo $i . '<br>';
        }
        break;
    default:
        echo 'Введите число меньше 15';
        break;
}

?>

<h3>3. Математические функции.</h3>
<p><pre>
        <code>
            &lt;?php
                function sum($a, $b)
                {
                    return $a + $b;
                }

                function difference($a, $b)
                {
                    return $a - $b;
                }

                function product($a, $b)
                {
                    return $a * $b;
                }

                function quotient($a, $b)
                {
                    return $a / $b;
                }
            ?&gt;
        </code>
    </pre>
</p>

<?php

// Рабочий php код

$a = 5;
function sum($a, $b)
{
    return $a + $b;
}

function difference($a, $b)
{
    return $a - $b;
}

function product($a, $b)
{
    return $a * $b;
}

function quotient($a, $b)
{
    return $a / $b;
}

?>


<h3>4. Математическая функция и switch.</h3>
<p><pre>
        <code>
            &lt;?php

                function mathOperation($arg1, $arg2, $operation)
                {
                    switch($operation){
                        case 'сложение':
                            return function sum($arg1, $arg2);
                        case 'вычитание':
                            return function difference($arg1, $arg2);
                        case 'умножение':
                            return function product($arg1, $arg2);
                        case 'деление':
                            return function quotient($arg1, $arg2);
                        default:
                            return 'Введите верное значение математической операции';
                    }
                }

            ?&gt;
        </code>
    </pre>
</p>

<?php

// Рабочий php код

function mathOperation($arg1, $arg2, $operation)
{
    switch($operation){
        case 'сложение':
            return sum($arg1, $arg2);
        case 'вычитание':
            return difference($arg1, $arg2);
        case 'умножение':
            return product($arg1, $arg2);
        case 'деление':
            return quotient($arg1, $arg2);
        default:
            return 'Введите верное значение математической операции';
    }
}

?>

<h3>5. Вывод года в подвале.</h3>
<p><i><a href="#footer">Voilà :)</a></i></p>

<h3>6. *Возведение в степень с помощью рекурсии.</h3>
<p>
<pre>
        <code>
            &lt;?php

                function power($val, $pow)
                {
                    if($pow !== 0) {
                        return $val * power($val, $pow - 1);
                    }
                    return 1;
                }

            ?&gt;

        </code>
    </pre>
</p>

<?php

// Рабочий php код

    function power($val, $pow)
    {
        if($pow !== 0) {
            return $val * power($val, $pow - 1);
        }
        return 1;
    }
?>

<h3>7. *Функция вывода времени.</h3>
<p>
<pre>
        <code>
            &lt;?php

                function getCurrentTime()
                {

                    $h = date('H');
                    $m = date('i');

                    function getCase($d)
                    {
                        if ((int)$d == 0 || ((int)$d >= 5 && (int)$d <= 20) || (((int)$d >=10) && ($d[1] == 0 || ($d[1] >= 5 && $d[1] <= 9)))){
                            return 3;
                        } elseif (((int)$d < 10 && $d >= 2 && $d <= 4) || ((int)$d > 10 && $d[1] >= 2 && $d[1] <= 4))
                        {
                            return 2;
                        } elseif ((int)$d == 1 || ((int)$d > 20 && $d[1] == 1))
                        {
                            return 1;
                        }
                    }

                    function getHour($d)
                    {
                        if (getCase($d) == 1) {
                            return $d . ' ' . 'час ';
                        } elseif (getCase($d) == 2) {
                            return $d . ' ' . 'часа ';
                        } elseif (getCase($d) == 3) {
                            return $d . ' ' . 'часов ';
                        }
                    }

                    function getMinute($d)
                    {
                        if (getCase($d) == 1) {
                            return $d . ' ' . 'минута';
                        } elseif (getCase($d) == 2) {
                            return $d . ' ' . 'минуты';
                        } elseif (getCase($d) == 3) {
                            return $d . ' ' . 'минут';
                        }
                    }

                    return getHour($h) . getMinute($m);

                }

            ?&gt;

        </code>
    </pre>
</p>

<?php

// Рабочий php код
function getCurrentTime()
{

    $h = date('H');
    $m = date('i');

    function getCase($d)
    {
        if ((int)$d == 0 || ((int)$d >= 5 && (int)$d <= 20) || (((int)$d >=10) && ($d[1] == 0 || ($d[1] >= 5 && $d[1] <= 9)))){
            return 3;
        } elseif (((int)$d < 10 && $d >= 2 && $d <= 4) || ((int)$d > 10 && $d[1] >= 2 && $d[1] <= 4))
        {
            return 2;
        } elseif ((int)$d == 1 || ((int)$d > 20 && $d[1] == 1))
        {
            return 1;
        }
    }

    function getHour($d)
    {
        if (getCase($d) == 1) {
            return $d . ' ' . 'час ';
        } elseif (getCase($d) == 2) {
            return $d . ' ' . 'часа ';
        } elseif (getCase($d) == 3) {
            return $d . ' ' . 'часов ';
        }
    }

    function getMinute($d)
    {
        if (getCase($d) == 1) {
            return $d . ' ' . 'минута';
        } elseif (getCase($d) == 2) {
            return $d . ' ' . 'минуты';
        } elseif (getCase($d) == 3) {
            return $d . ' ' . 'минут';
        }
    }

    return getHour($h) . getMinute($m);

}

?>

<h2 style="text-align: center;"><?= getCurrentTime() ?></h2>

<footer id="footer">
    <hr>
    <p style="text-align: center;">Slava &copy; <?= $year ?></p>
</footer>
</body>
</html>

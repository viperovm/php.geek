<?php

$year = date('Y');
$title = 'Третья домашка)';
$heading = 'Третья домашняя работа от 13.02.' . $year . 'г.';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<header id="header">
    <div class="container">
        <div class="logo">
            <span class="logo-d">D</span>Z
        </div>
        <nav class="main-nav">
            <?php
            require_once '6-menu.php';
            ?>
        </nav>
    </div>
    <hr>
</header>
<div class="container">
    <h1><?= $heading ?></h1>
    <h3 id="1">1. Числа от 0 до 100.</h3>
    <p>
        <?php
        require_once '1.php';
        echo getNumRow();
        ?>
    </p>
    <pre>
        <code>
            &lt;?php
                $i = $0;
                $b = '';

                while ($i <= 100) {
                    if ($i % 3 === 0) {
                        $b .= $i . ' ';
                    }
                    $i++;
                }
                echo $b;
            ?&gt;
        </code>
    </pre>
    <h3 id="2">2. Вывод от 0 до 10.</h3>
    <p>
        <?php
        require_once '2.php';
        ?>
    </p>
    <pre>
        <code>
            &lt;?php
                $i = 0;
                do{
                    if ($i == 0){
                        echo "&lt;p&gt;$i - это ноль.&lt;/p&gt;";
                        } elseif (is_float($i / 2)){
                        echo "&lt;p&gt;$i - нечетное число&lt;/p&gt;";
                        } else {
                        echo "&lt;p&gt;$i - четное число&lt;/p&gt;";
                        }
                        $i++;
                    } while ($i <= 10);
            ?&gt;
        </code>
    </pre>
    <h3 id="3">3. Области и города.</h3>
    <p>
        <?php
        require_once '3.php';
        ?>
    </p>
    <pre>
        <code>
            &lt;?php
                $regions = [
                    'Московская' => [
                        'Москва',
                        'Зеленоград',
                        'Клин'
                    ],
                    'Ленинградская' => [
                        'Санкт-Петербург',
                        'Всеволожск',
                        'Павловск',
                        'Кронштадт'
                    ],
                    'Рязанская' => [
                        'Рязань',
                        'Касимов',
                        'Кораблино'
                    ],
                    'Калужская' => [
                        'Калуга',
                        'Обнинск',
                        'Киров'
                    ]
                ];

                foreach ($regions as $my_key => $my_value){
                    echo $my_key . ' область:&lt;br&gt;';
                    foreach ($my_value as $city){
                        if($city == end($my_value)){
                            echo $city . '.&lt;br&gt;';
                        } else {
                            echo $city . ', ';
                        }
                    }
                }
            ?&gt;
        </code>
    </pre>
    <h3 id="4">4. Транслит строки.</h3>
    <p>
        <?php
        require_once '4.php';
        ?>
    </p>
    <p>

    </p>
    <pre>
        <code>
            &lt;?php

                $arr = [
                    'а' => 'a',
                    'б' => 'b',
                    'в' => 'v',
                    'г' => 'g',
                    'д' => 'd',
                    'е' => 'e',
                    'ё' => 'yo',
                    'ж' => 'zh',
                    'з' => 'z',
                    'и' => 'i',
                    'й' => 'y',
                    'к' => 'k',
                    'л' => 'l',
                    'м' => 'm',
                    'н' => 'n',
                    'о' => 'o',
                    'п' => 'p',
                    'р' => 'r',
                    'с' => 's',
                    'т' => 't',
                    'у' => 'u',
                    'ф' => 'f',
                    'х' => 'h',
                    'ц' => 'c',
                    'ч' => 'ch',
                    'ш' => 'sh',
                    'щ' => 'sh\'',
                    'ъ' => '\'',
                    'ы' => 'y',
                    'ь' => '\'',
                    'э' => 'e',
                    'ю' => 'yu',
                    'я' => 'ya'
                ];

                $str = 'Поиск 123 по ABC похожим abc запросам';

                function getTranslite($str, $arr)
                {
                    $arr1 = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);

                    $newStr = '';

                    for($i = 0; $i < count($arr1); $i++){
                        $l = $arr1[$i];

                        if (preg_match('/[А-Яа-яЁё]/', $l)) {
                            if ($l === mb_strtoupper($l)) {
                                $l = mb_strtolower($l);
                                $newStr .= mb_strtoupper($arr[$l]);
                            } else {
                                $l = $arr1[$i];
                                $newStr .= $arr[$l];
                            }
                        } elseif (preg_match('/[A-Za-z\s\d]/', $l)) {
                            $l = $arr1[$i];
                            $newStr .= $l;

                        }
                    }

                    return $newStr;
                }

                echo getTranslite($str, $arr);

            ?&gt;
        </code>
    </pre>
    <h3 id="5">5. Подчеркивание вместо пробелов.</h3>
    <p>
        <?php
        require_once '5.php';
        ?>
    </p>
    <pre>
        <code>
            &lt;?php

                echo str_replace(' ', '_', getTranslite($str, $arr));

            ?&gt;
        </code>
    </pre>
    <h3 id="6">6. Вывести меню с помощью php.</h3>
    <p>
    <p><i><a href="#header">Voilà :)&#9757;</a></i></p>
    <pre>
        <code>
            &lt;?php

                $arr_menu = [
                    'Задание1' => '#1',
                    'Задание2' => '#2',
                    'Задание3' => '#3',
                    'Задание4' => '#4',
                    'Задание5' => '#5',
                    'Задание6' => '#6',
                    'Задание*' => [
                        'Задание7' => '#7',
                        'Задание8' => '#8',
                        'Задание9' => '#9',
                    ],
                ];

                echo '&lt;ul class="main-menu"&gt;';
                foreach ($arr_menu as $key => $value)
                {
                    if (!is_array($value))
                    {
                        echo '&lt;li&gt;&lt;a href="' . $value . '"&gt;' . $key . '&lt;/a&gt;&lt;/li&gt;';
                    } else
                    {
                        echo '&lt;li&gt;' . $key . '&darr;&lt;ul&gt;';

                        foreach ($value as $sub_key => $sub_value)
                        {
                            echo '&lt;li&gt;&lt;a href="' . $sub_value . '"&gt;' . $sub_key . '&lt;/a&gt;&lt;/li&gt;';
                        }

                        echo '&lt;/ul&gt;&lt;/li&gt;';
                    }
                }
                echo '&lt;/ul&gt;';

            ?&gt;

        </code>
    </pre>
    </p>
    <h3 id="7">7. *For без тела.</h3>
    <p>
        <?php
        require_once '7.php';
        ?>
    </p>
    <pre>
        <code>
            &lt;?php

                for($i = 0; print $i . ' ', $i++ < 9;)
                {
                    // пусто)
                }

            ?&gt;

        </code>
    </pre>
    <h3 id="8">8. *Области и города на "К".</h3>
    <p>
        <?php
        require_once '8.php';
        ?>
    </p>
    <pre>
        <code>
            &lt;?php

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

            ?&gt;

        </code>
    </pre>
    <h3 id="9">9. *Пробелы &rarr; нижнее подчеркивание.</h3>
    <p>
        <?php
        require_once '9.php';
        ?>
    </p>
    <pre>
        <code>
            &lt;?php

                function getUrlFromStr($str, $arr)
                {
                    return mb_strtolower(str_replace(' ', '_', getTranslite($str, $arr)));
                }

            ?&gt;

        </code>
    </pre>
</div>
<footer id="footer">
    <hr>
    <div class="container">
        <p style="text-align: center;">Slava &copy; <?= $year ?></p>
    </div>
</footer>
</body>
</html>

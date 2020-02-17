<?php

$arr = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'io',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'i',
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
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => 'ie',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'iu',
    'я' => 'ia'
];

$str = 'Поиск, 123, по ABC ПохоGжим o\'neal подъезд галька abc запросам';
echo '<p>' . $str . '</p>';

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

echo '<p>' . getTranslite($str, $arr) . '</p>';
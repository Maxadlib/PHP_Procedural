<?php

$arr = ['Orange', 'Citron', 'Mandarine'];

foreach ($arr as $index => $item) {
    echo sprintf("%s : %s \n", $index, $item);
    $arr[$index] = 'citron';
}

var_dump($arr);
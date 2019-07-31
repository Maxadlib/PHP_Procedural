<?php

/**
 * @param $text text to display
 * @param $number
 * @param $var
 */
function displayInformation($text, $number = null, $var = null) {
    $text = strtoupper($text);

    echo sprintf("%s!\n", $number);
    echo sprintf("%s!\n", $var);
    echo sprintf("%s!\n", $text);
}

displayInformation('Hello', 40);
displayInformation('Julien');
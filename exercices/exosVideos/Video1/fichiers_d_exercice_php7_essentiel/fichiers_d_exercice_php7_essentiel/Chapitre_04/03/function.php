<?php

/**
 * @param $text text to display
 * @param $number
 * @param $var
 */
function displayInformation($text, $number, $var) {
    $text = strtoupper($text);

    echo sprintf("%s!\n", $text);
}

displayInformation('Hello');
displayInformation('Julien');
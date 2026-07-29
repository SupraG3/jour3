<?php

$nb_a = 15;
$nb_b = 5;

function my_sub(): mixed {
    $GLOBALS['nb_a'] = $GLOBALS['nb_a'] - $GLOBALS['nb_b'];

    return $GLOBALS['nb_a'];
}

echo my_sub() . PHP_EOL;

?>
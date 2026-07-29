<?php

function my_concat(mixed $str1, mixed $str2): void
{
    echo $str1 . " " . $str2 . PHP_EOL;
}

my_concat("Hello", "world");
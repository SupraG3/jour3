<?php

function print_calls(): void {
    static $a = 1;
    echo $a . PHP_EOL;
    $a++;
}

print_calls();
print_calls();
print_calls();

?>
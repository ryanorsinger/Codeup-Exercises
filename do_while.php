<?php

$x = 0;

do {
    echo $x . PHP_EOL;
    $x += 2;
} while ($x <= 100);


$x = 100;
do {
    echo $x . PHP_EOL;
    $x -= 5;
} while ($x >= -10);

$x = 2;
do {
    echo $x . PHP_EOL;

    $x *= $x;

} while ($x < 1000000);

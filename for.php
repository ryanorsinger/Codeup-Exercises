<?php

fwrite(STDOUT, "Input starting number ");
$starting = trim(fgets(STDIN));

if(!is_numeric($starting)) {
    $starting = 1;
}

fwrite(STDOUT, "Now an ending number ");
$ending = trim(fgets(STDIN));

if(!is_numeric($ending)) {
    $ending = 100;
}

fwrite(STDOUT, "Supply a number by which to iterate... ");
$iterator = trim(fgets(STDIN));

if(!is_numeric($iterator)) {
    $iterator = 1;
}

for($i = $starting; $i <= $ending; $i += $iterator) {
    echo $i . PHP_EOL;
}

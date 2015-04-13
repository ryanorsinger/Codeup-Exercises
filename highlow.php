<?php

echo "\$argc is the number of arguments INCLUDING the filename.";

var_dump($argc);

if($argc == 3) {

    $random = rand($argv[1], $argv[2]);

    do {

        fwrite(STDOUT, "Please guess a number between $argv[1] and $argv[2]  ");
        $guess = trim(fgets(STDIN));

        while(!is_numeric($guess)) {
            fwrite(STDOUT, "Please guess a number between $argv[1] and $argv[2] ");
            $guess = trim(fgets(STDIN));
        }

        if($guess == $random) {
            fwrite(STDOUT, "GOOD GUESS");
        }

        if ($guess < $random) {
            fwrite(STDOUT, "GUESS HIGHER");
        }

        if ($guess > $random) {
            fwrite(STDOUT, 'GUESS LOWER');
        }

    } while($random != $guess);

}

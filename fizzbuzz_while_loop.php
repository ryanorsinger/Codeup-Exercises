<?php
// start at 1 and count to 100
// If the number is a multiple of 3, then output "Fizz"
// If the number is a multiple of 5, then output "Buzz"
// If the number is a multiple of both, then output "FizzBuzz"
// If the number is not evenly divisible by 3 or 5, output the number.

$x = 1;

    if ($x % 15 == 0) {
        echo "FizzBuzz" . PHP_EOL;
    } else if ($x % 3 == 0) {
        echo "Fizz" . PHP_EOL;
    } else if ($x % 5 == 0) {
        echo "Buzz" . PHP_EOL;
    } else {
        echo $x . PHP_EOL;
    }

    $x++;
}

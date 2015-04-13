<?php
// start at 1 to 100
// if the number is divisible by 3, output "Fizz"
// if the number is divisible by 5, output "Buzz"
// if divisible by both, output "FizzBuzz"
// if not divisible by either, then output the number's value.

for($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . PHP_EOL;
    } else if($i % 5 == 0) {
        echo "Buzz" . PHP_EOL;
    } else if($i % 3 == 0) {
        echo "Fizz" . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}

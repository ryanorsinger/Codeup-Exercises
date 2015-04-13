<?php

function multiply($a, $b) {
    if(is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "either a or b are not numbers";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        if ($b == 0) {
            return "dude, you can't divide by zero";
        }
        return $a / $b;
    } else {
        return "either a or b are not numbers.";
    }
}

    echo divide("23", 12);


<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function myArraySearch($query, $names) {
    $found = false;

    foreach($names as $name) {
        if ($name == $query) {
            $found = true;
        }
    }
    return $found;
}

echo myArraySearch('Bob', $names);
echo myArraySearch('Tina', $names);

function compareTwoArrays($array1, $array2) {
    $count = 0;
    foreach($array1 as $value) {
        $result = array_search($value, $array2);
        if(is_numeric($result)) {
            $count ++;
        }
    }
    return $count;
}

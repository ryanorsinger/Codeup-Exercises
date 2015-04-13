<?php

/*
 * This example demonstrates echoing a PHP variable inside of an href.
 * This allows us to build links out of PHP variables.
 */

if(empty($_GET['key'])) {
    $value = 0;
} else {
    $value = $_GET['key'];
}

?>
<html>
    <head>
    </head>
    <body>
        <h1>Count is <?= $value ?></h1>
        <a href="?key=<?= $value +1 ?>">You've clicked me <?= $value ?> times</a>
    </body>
</html>

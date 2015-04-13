<?php

function pageController()
{
    // Initialize an empty data array.
    $data = array();

    if(empty($_GET['result'])) {
        $data['counter'] = 0;
        $data['message'] = "Welcome to Ping Pong!";
    } else {
        if ($_GET['result'] == 'miss') {
            $data['counter'] = 0;
            $data['message'] = "GAME OVER, man";
        }
        if ($_GET['result'] == 'miss') {
            $data['counter'] = $_GET['counter'];
            $data['message'] = "pingpong game in progress, yo!";
        }
    }

    // Return the completed data array.
    return $data;
}

extract(pageController());
?>
<html>
    <head></head>
    <body>
        <h3><?= $message ?></h3>
        <a href="pong.php?result=hit&counter=<?= $counter + 1; ?>">Hit</a>
        <a href="pong.php?result=miss">Miss</a>
    </body>
</html>

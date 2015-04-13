<?php

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
    // Initialize an empty data array.
    $data = array();

    if(empty($_GET['counter'])) {
        $counter = 0;
    } else {
        $counter = $_GET['counter'];
    }

    $data['counter'] = $counter;

    // Return the completed data array.
    return $data;
}

extract(pageController());
?>
<!DOCTYPE HTML>
<html>
    <?php echo var_dump($_GET) ?>
    <head>

    </head>
    <body>

        <!-- H2 shows current counter value -->
        <h2><?= $counter ?></h2>

        <!-- Up link -->
        <a href="?direction=up&counter=<?php echo $counter+1; ?>">Up</a>
        <!-- Down link -->

        <a href="?direction=down&counter=<?php echo $counter-1; ?>">Down</a>
    </body>
</html>

<?php

// Require or include statements are allowed here. All other code goes in the pageController function.

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
    // Initialize an empty data array.
    $data = array();

    // Add data to be used in the html view.
    $data['message'] = 'Hello Codeup!';
    $data['date'] = date('Y-m-d');
    $data['author'] = 'Ryan Orsinger';

    // Return the completed data array.
    return $data;
}

// Call the pageController function and extract all the returned array as local variables.
$data = pageController();
extract($data);

// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!doctype html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
        <?php echo $message; ?>
        <?php echo $date; ?>
        <?php echo $author; ?>

    </body>
</html>

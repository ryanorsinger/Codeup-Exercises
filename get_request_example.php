<?php

if (empty($_GET['search'])) {
    $search = '';
} else {
    $search = $_GET['search'];
}

?>
<html>
    <head>
    </head>
    <body>
        <h1>GET request example</h1>
        <ul>
            <li>The URL after "?" is the query string.</li>
            <li>The query string contains the GET request</li>
            <li>PHP's $_GET global variable is the GET request as an associative array.</li>
        </ul>
        <hr>
        <form method="GET" action="get_request_example.php">
            <input type="text" name="search" value="" placeholder="Enter your search">
            <input type="submit" value="search">
        </form>
        <h2>The search string is <?= $_SERVER['QUERY_STRING'] ?></h2>
        <h2>$_GET['search'] contains "<?php echo $search ?>"</h2>
        <?= var_dump($_GET) ?>
    </body>
</html>

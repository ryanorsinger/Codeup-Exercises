<?php
    var_dump($_GET);

?>

<form method="GET" action="form.php">
    <input type="text" name="name" value="" placeholder="Name">
    <input type="text" name="phone" value="" placeholder="Your digits, please...">
    <button type="submit">Go!</button>
</form>

<? if(!empty($_GET['name'])): ?>
    <h1>Name is <?= $_GET['name'] ?> and Phone number is <?= $_GET['phone'] ?></h1>
<? endif; ?>

<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=adlister_db', 'codeup', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

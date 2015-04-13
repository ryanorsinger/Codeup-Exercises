<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile)
{
    $handle = fopen($inputFile, 'r');
    $contents = fread($handle, filesize($inputFile));
    fclose($handle);

    $contents = trim($contents);
    return explode(PHP_EOL, $contents);
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $movies)
{
    $handle = fopen($outputFile, 'w');

    foreach ($movies as $film) {
        fwrite($handle, $film . PHP_EOL);
    }

    fclose($handle);
}

/**
 * Pick a random movie from an array
 **/
function getRandomElement($movies)
{
    $key = array_rand($movies);

    return $movies[$key];
}

$movies = readLines($inputFile);

echo "Let's watch " . getRandomElement($movies) . "!\n";
echo "But " . getRandomElement($movies) . " really sucks!\n";

sort($movies);

writeLines($outputFile, $movies);

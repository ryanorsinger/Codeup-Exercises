<?php

function getRandomElement($array) {
    $randomKey = array_rand($array);
    return $array[$randomKey];
}

function pageController() {
    $data = [];
    $nouns = ['flagpole', 'switch', '3 legged tool', 'car', 'glove', 'revolver', 'dice', 'eight ball', 'cat', 'bowling pins'];
    $adjectives = ['Grumpy', 'Happy', 'Sleepy', 'Bashful', 'Sneezy', 'Dopey'];
    $data['randomAdjective'] = getRandomElement($adjectives);
    $data['randomNoun'] = getRandomElement($nouns);

    return $data;
}

extract(pageController());

?>

<html>
    <head></head>
    <body>
        <h1>My random server name is: <?= $randomAdjective . '-' . $randomNoun ?></h1>
    </body>
</html>

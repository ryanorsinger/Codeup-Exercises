<?php

require 'civilian.php';

class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function fullName()
    {
        return $this->pseudonym;
    }

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}

$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';

echo $superman->fullName() . PHP_EOL;

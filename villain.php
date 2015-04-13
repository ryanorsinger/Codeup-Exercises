<?php

class Villain
{
    public $firstName;
    public $lastName;
    public $pseudonym;
    public $capeColor;


    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
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

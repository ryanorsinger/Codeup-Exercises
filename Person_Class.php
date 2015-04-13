<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function __destruct()
    {
        echo "{$this->firstName} {$this->lastName}'s time of death: " . time() . PHP_EOL;
    }
}


$JFK = new Person('J. Fitzgerald', 'Kennedy');
echo "This is the end of the script\n";

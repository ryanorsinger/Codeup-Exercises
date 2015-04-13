<?php

class Automobile
{

    public $color = '';
    public $make = '';
    public $model = '';
    public $features = [];

    public function __construct($message)
    {
        echo "$message, welcome to your new car" . PHP_EOL;
    }


    public function describeCar()
    {
        echo "Welcome your new $this->color $this->make $this->model automobile" . PHP_EOL;
    }
}

$hoopty = new Automobile('yo');

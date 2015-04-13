<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
    public function perimeter()
    {
        return $this->width * 4;
    }
}

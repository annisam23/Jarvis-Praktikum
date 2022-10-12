<?php
class Car
{
    //constructor
    public function __construct()
    {
        echo "Ini ";
    }

    //atribut
    public $color = "Red";
    public $max_speed = 300;

    //method
    public function jalan()
    {
        echo "Mobil berjalan....";
    }
}

$avanza = new Car();
$avanza->jalan();

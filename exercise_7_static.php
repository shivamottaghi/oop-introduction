<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/
class beverage{
    public string $color;
    public float $price;
    public string $temperature;
    static string $address = "Melkmarkt 9, 2000 Antwerpen";

    public function __construct( string $color, float $price){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getInfo() : void{
        echo "This beverage is $this->temperature and $this->color and the price is &euro; $this->price. ";
    }
    static function returnStatic(): string{
        return self::$address;
    }
}
echo beverage::$address .'<br>';
echo beverage::returnStatic();
<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class beverage{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct( string $color, float $price){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getInfo() : string{
        return "This beverage is $this->temperature and $this->color and the price is &euro; $this->price. ";
    }

    public function whatIsTemperature() : string{
        return "the temperature is : $this->temperature <br>";
    }
    public function changePrice(float $price) : string{
        if ($price > 0){
            return 'the new price is: '.$this->price = $price;
        }
        return 'price can\'t be negetive or 0!';
    }

}

$cola = new beverage( 'black', 2);
echo $cola->getInfo().'<br>';
echo $cola->whatIsTemperature();
echo $cola->changePrice(3.5) .'<br>';
echo 'change the price to -5.5 returns: '. $cola->changePrice(-5.5);

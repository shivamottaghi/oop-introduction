<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/
class beverage{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getInfo() : void{
        echo "This beverage is $this->temperature and $this->color and the price is &euro; $this->price. ";
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

}

class beer extends beverage{
    protected string $name;
    protected float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent::__construct($color , $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @return string
     */
    public function beerInfo(): string{
        return "Hello I'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a". $this->color ."color";
    }
}
$cola = new beverage( 'black', 2);
echo $cola->getInfo().'<br>';
$duvel = new beer('Duvel', 8.7, 'blond',3.5);
echo $duvel->getAlcoholPercentage().'<br>';
//echo $duvel->alcoholPercentage.'<br>';
echo $duvel->getInfo().'<br>';
echo $duvel->getColor().'<br>';
$duvel->setColor('light');
echo "color changed to: <br>";
echo $duvel->getColor() . '<br>';
echo $duvel->beerInfo();
<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/
class beverage{
    private string $color;
    private float $price;
    private string $temperature;
    const barName = 'Het Vervolg';

    public function __construct(string $color, float $price){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getInfo() : void{
        echo "This beverage is $this->temperature and $this->color and the price is &euro; $this->price. ";
    }

    public function doSomethingWithBarName(): string{
        return self::barName;
    }
}

class beer extends beverage{
    private string $name;
    private float $alcoholPercentage;

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

    public function doSomethingElseWithBarName(){
        echo beverage::barName;
    }

}
$duvel = new beer('Duvel', 8.7, 'blond',3.5);
echo $duvel->getAlcoholPercentage().'<br>';
//echo $duvel->alcoholPercentage.'<br>';
echo $duvel->getInfo().'<br>';
//echo $duvel->color.'<br>';
echo beverage::barName . '<br>';
echo 'func in beverage: '.$duvel->doSomethingWithBarName() .'<br>';
echo 'func in beer: ';
$duvel->doSomethingElseWithBarName();
echo '<br>';
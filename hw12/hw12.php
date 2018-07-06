<?php

namespace Classes;

function __autoload($className)
{
    $filePath = 'Classes/' . $className . '.class.php';
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        die("Класса $className не существует"); }
}


abstract class Product
{
    public $category;
    public $title;
    public $price;
    public $discount;

    public function __construct($category, $title, $price, $discount)
    {
        $this->category = $category;
        $this->title = $title;
        $this->price = $price;
        $this->discount = $discount;
    }
}

spl_autoload_register('myAutoload');
$myCar = new Car('Passenger Car', 'Audi A7', 125000, 10);
$myCar->setCountry('Russia')
      ->setYear(2018);

print_r($myCar);

?>
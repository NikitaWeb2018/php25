<?php
/**
 * Created by PhpStorm.
 * User: simonov
 * Date: 12.06.2018
 * Time: 10:43
 */

namespace Classes;


class Car extends Product
{
    public $country;
    public $color = 'White';
    public $year;

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}
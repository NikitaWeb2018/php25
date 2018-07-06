<?php
/**
 * Created by PhpStorm.
 * User: simonov
 * Date: 13.06.2018
 * Time: 10:32
 */

namespace Classes;


class Duck
{
    public $type;
    public $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}
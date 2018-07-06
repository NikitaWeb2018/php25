<?php
/**
 * Created by PhpStorm.
 * User: simonov
 * Date: 13.06.2018
 * Time: 10:32
 */

namespace Classes;


class TV
{
    public $diagonal;
    public $smartTV;

    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
        return $this;
    }

    public function setSmartTV($smartTV)
    {
        $this->smartTV = $smartTV;
        return $this;
    }
}
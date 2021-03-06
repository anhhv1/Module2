<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:15
 */
include_once ('Circle.php');
require_once ('__DIR__/../../Interface/Resizeable.php');

class Cylinder extends Circle implements Resizeable
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
    public function resize(float $percent)
    {
        $this->radius=$this->radius*$percent;
        $this->height= $this->height*$percent;
    }
}
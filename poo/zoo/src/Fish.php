<?php

namespace App;
class Fish extends Animal implements CanSwim
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function noise()
    {
        return parent::noise() . " " . $this->getNoise();
    }
    protected function getNoise()
    {
        return "bloubloublou";
    }
    public function getName()
    {
        return $this->name;
    }
}

?>
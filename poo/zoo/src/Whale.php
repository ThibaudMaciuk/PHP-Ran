<?php
namespace App;
class Whale extends Animal implements CanSwim
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
        return "splash";
    }
    public function getName()
    {
        return $this->name;
    }
}

?>
<?php
namespace App;
class Elephant extends Animal implements CanWalk
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
        return "toooooout";
    }
    public function getName()
    {
        return $this->name;
    }
}

?>
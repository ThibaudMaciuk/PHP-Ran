<?php
namespace App;
class Parrot extends Animal
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

        return "coco";
    }
}

?>
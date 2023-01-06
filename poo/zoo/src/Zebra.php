<?php
namespace App;
class Zebra extends Animal
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
        // return the zebra noise

        return "hiiiii";
    }
}
?>
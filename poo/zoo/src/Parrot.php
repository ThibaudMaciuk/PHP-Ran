<?php
namespace App;
class Parrot extends Animal implements CanFly
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    protected function getNoise()
    {
        return "coco";
    }
}

?>
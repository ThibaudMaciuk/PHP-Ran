<?php
namespace App;
class Parrot extends Animal
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
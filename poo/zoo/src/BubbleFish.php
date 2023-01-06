<?php

namespace App;
class BubbleFish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    
    protected function getNoise()
    {
        return "bloubloublou";
    }
}

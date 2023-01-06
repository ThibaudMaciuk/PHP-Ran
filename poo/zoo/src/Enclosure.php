<?php
namespace App;
Class enclosure
{
    public $animals = [];
    public function addAnimal( $animal)
    {
        $this->animals[] = $animal;
    }
    public function __toString()
    {
        return "";
    }
}


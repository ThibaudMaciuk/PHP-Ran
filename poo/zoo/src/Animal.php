<?php
namespace App;
abstract class Animal
{
    private function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    protected function getNoise()
    {
        return string;
    }
    public function noise()
    {
        return getNoise();
    }
}

?>
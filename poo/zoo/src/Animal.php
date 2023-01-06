<?php
namespace App;
abstract class Animal
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    protected abstract function getNoise();

    public function noise()
    {
        return $this->getNoise();
    }
}

?>
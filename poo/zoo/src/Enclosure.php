<?php
namespace App;
class Enclosure {
    private $animals = array();
  
    public function addAnimal(Animal $animal) {
      $this->animals[] = $animal;
    }


    public function __toString() {
        $output = "";
        foreach ($this->animals as $animal) {
          $output .= $animal->cry() . "\n";
        }
        return $output;
      }
    }
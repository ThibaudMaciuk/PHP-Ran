<?php
namespace App;
class Zoo {
    private static $aquarium = null;
    private static $aviary = null;
    private static $fence = null;
  
    public static function getAquarium() {
      if (self::$aquarium === null) {
        self::$aquarium = new Enclosure();
      }
      return self::$aquarium;
    }
  
    public static function getAviary() {
      if (self::$aviary === null) {
        self::$aviary = new Enclosure();
      }
      return self::$aviary;
    }
  
    public static function getFence() {
      if (self::$fence === null) {
        self::$fence = new Enclosure();
      }
      return self::$fence;
    }
  
    public static function addAnimal(Animal $animal) {
      if ($animal instanceof CanSwim) {
        self::getAquarium()->addAnimal($animal);
      } elseif ($animal instanceof CanFly) {
        self::getAviary()->addAnimal($animal);
      } elseif ($animal instanceof CanWalk) {
        self::getFence()->addAnimal($animal);
      }
    }
  
    public static function visitTheZoo() {
      $output = "";
  
      $aquarium = self::getAquarium();
      if (count($aquarium->animals) > 0) {
        $output .= "Aquarium:\n" . $aquarium . "\n";
      }
  
      $aviary = self::getAviary();
      if (count($aviary->animals) > 0) {
        $output .= "Aviary:\n" . $aviary . "\n";
      }
  
      $fence = self::getFence();
      if (count($fence->animals) > 0) {
        $output .= "Fence:\n" . $fence . "\n";
      }
  
      return $output;
    }
  }
  
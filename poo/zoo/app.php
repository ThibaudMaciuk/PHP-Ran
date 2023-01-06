<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

// Here comes your code.*
function add_to_array(int $x, string $y, string $name_class)
{
    for ($x; $x==0; $x--)
    {
        $name = $y;
        $name = $y . $x;
        $temp = new $name_class($name);
        $array['$name'] = $temp->getNoise();
    }
    echo $array;
}

$array[] = array(); 
add_to_array(5, poisson, Fish);
add_to_array(3, poissonBulle, BubbleFish);
add_to_array(2, poissonChat, CatFish);
add_to_array(1, poissonClown, ClownFish);
add_to_array(2, Elephant, Elephant);
add_to_array(1, Zebre, Zebra);
add_to_array(10, Parrot, Parrot);
add_to_array(2, Dove, Dove);
<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

// Here comes your code.*
function add_to_array(int $x, string $y, string $name_class, array $array)
{
    for ($x; $x==0; $x--)
    {
        $name = $y;
        $name = $y . $x;
        $temp = new $name_class($name);
        $array['$name'] = $temp->getNoise();
    }
    return array_values($array);
}

$array = [];
echo add_to_array(5, 'poisson', 'Fish', $array);
echo add_to_array(3, 'poissonBulle', 'BubbleFish', $array);
echo add_to_array(2, 'poissonChat', 'CatFish', $array);
echo add_to_array(1, 'poissonClown', 'ClownFish', $array);
echo add_to_array(2, 'Elephant', 'Elephant', $array);
echo add_to_array(1, 'Zebre', 'Zebra', $array);
echo add_to_array(10, 'Parrot', 'Parrot', $array);
echo add_to_array(2, 'Dove', 'Dove', $array);
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
        $name = new $name_class($name);
        $array[$name->getName($name)] = $name->getNoise($name);
    }
}

$array = [];
add_to_array(5, 'poisson', 'Fish', $array);
add_to_array(3, 'poissonBulle', 'BubbleFish', $array);
add_to_array(2, 'poissonChat', 'CatFish', $array);
add_to_array(1, 'poissonClown', 'ClownFish', $array);
add_to_array(2, 'Elephant', 'Elephant', $array);
add_to_array(1, 'Zebre', 'Zebra', $array);
add_to_array(10, 'Parrot', 'Parrot', $array);
add_to_array(2, 'Dove', 'Dove', $array);

foreach ($array as $key=>$animal)
{
    echo $key . ' ' . $animal ;
}
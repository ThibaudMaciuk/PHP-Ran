<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

// Here comes your code.*
function add_to_array(int $x, string $y, string $name_class, array $array)
{
    for ($i=0; $i<$x; $i++)
    {
        $name = $y . $x;
        $o = new $name_class($name);
        $array[$name] = $o->noise();
        echo $o->noise();
    }
}

$array = [];
add_to_array(10, 'Parrot', Parrot::class, $array);
add_to_array(5, 'poisson', Fish::class, $array);
add_to_array(3, 'poissonBulle', BubbleFish::class, $array);
add_to_array(2, 'poissonChat', CatFish::class, $array);
add_to_array(1, 'poissonClown', ClownFish::class, $array);
add_to_array(2, 'Elephant', Elephant::class, $array);
add_to_array(1, 'Zebre', Zebra::class, $array);
add_to_array(2, 'Dove', Dove::class, $array);

foreach ($array as $key=>$animal)
{
    echo $key . '->' . $animal .PHP_EOL;
}
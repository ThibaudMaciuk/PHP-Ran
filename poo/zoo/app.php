<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

// Here comes your code.*
$array = [];
function add_to_array(int $x, string $y, string $name_class)
{
    global $array;
    for ($i=0; $i<$x; $i++)
    {
        $name = $y . $i;
        //echo $name." Est mis dans le tableau";
        $o = new $name_class($name);
        $array[$name] = $o->noise();
        //var_dump($array);
        //echo $o->noise();
    }
}

add_to_array(10, 'Parrot', Parrot::class);
add_to_array(5, 'poisson', Fish::class);
add_to_array(3, 'poissonBulle', BubbleFish::class);
add_to_array(2, 'poissonChat', CatFish::class);
add_to_array(1, 'poissonClown', ClownFish::class);
add_to_array(2, 'Elephant', Elephant::class);
add_to_array(1, 'Zebre', Zebra::class);
add_to_array(2, 'Dove', Dove::class);
//var_dump($array);
foreach ($array as $key=>$animal)
{
    echo $key . '->' . $animal .PHP_EOL;
}
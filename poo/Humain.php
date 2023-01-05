<?php

class Humain
{
    public $taille = 172;

    public $nom;


    public function marcher()
    {
        echo "Je marche";
    }

    public function maTaille()
    {
        echo ($this->taille+1);
    }

    public function __construct()
    {
        echo "Je suis né.e";
    }
    public function __destruct()
    {
        echo "Je suis mort.e";
    }

}
$marcelline = new Humain();
echo "\r\n";
$constance = new Humain();
echo "\r\n";

echo $marcelline->marcher();
echo "\r\n";
echo nl2br($marcelline->taille);
echo "\r\n";
echo nl2br($constance->marcher());
echo "\r\n";
echo nl2br($constance->taille);
echo "\r\n"; 
echo nl2br($marcelline->maTaille());
echo "\r\n";
echo nl2br($constance->maTaille()); 
echo "\r\n";
unset ($constance);
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
}
$marcelline = new Humain();

$constance = new Humain();


echo $marcelline->marcher();
echo $constance->taille;
echo $marcelline->marcher();
echo $constance->taille; 
echo $marcelline->maTaille();
echo $constance->maTaille(); 
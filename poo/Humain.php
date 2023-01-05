<?php
class Humain
{
	private $secret;
	public function setSecret($secret)
	{
		$this->secret = $secret;
		return $this->secret;
	}

	public function getSecret()
	{
		echo $this->secret;
	}

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
    	public function __construct($nomDeFamille)
    	{
			$this->nom = $this->nom ." ".$nomDeFamille;
        	echo "Je suis né.e";
    	}
    	public function __destruct()
    	{
        	echo "Je suis mort.e";
    	}
}

$marcelline = new Humain("Bernard");
echo "\r\n";
$constance = new Humain("PasBernard");
echo "\r\n";

echo $marcelline->marcher();
echo "\r\n";
echo $marcelline->maTaille();
echo "\r\n";
echo $constance->marcher();
echo "\r\n";
echo $constance->maTaille();
echo "\r\n";
echo $constance->setSecret('hey');
echo "\r\n";
echo $marcelline->setSecret('aie');
echo "\r\n";
echo $constance->getSecret();
echo "\r\n";
echo $marcelline->getSecret();
echo "\r\n";
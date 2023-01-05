<?php
abstract class Humain
{
	use bipede;
	public static $population = 0;
	public $force = 1;
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
			echo "\r\n";
			self::$population++;
			echo "Il y a ".self::$population." humain.e.s";
    	}
    	public function __destruct()
    	{
			echo "\r\n";
        	echo "Je suis mort.e";
			echo "\r\n";
			self::$population--;
			echo "Il y a ".self::$population." humain.e.s";
    	}
}





class Femme extends Humain
{
	private $genre = "Femme";
	public $taille = 165;
	public function __construct($nomDeFamille)
	{
		parent::__construct($nomDeFamille);
		echo "Je suis une femme";
		echo "\r\n";
	}
	public function getForce()
	{
		return $this->force;
	}
	public function faireEnfant()
	{
		echo'Oui je peux enfanté';
	}
}

class Homme extends Humain
{
	public $force = 2;
	private $genre = "homme";
	public $taille = 180;
	public function getForce()
	{
		return $this->force;
	}
	public function __construct($nomDeFamille)
	{
		parent::__construct($nomDeFamille);
		echo "Je suis un homme";
		echo "\r\n";
	}
}

trait Bipede
{
	public function courir()
	{
		echo "Je cours !";
	}
}




















//////////////////////////////////////////////
//Fin des class
//////////////////////////////////////////////
$marcelline = new Femme("Bernard");
echo "\r\n";
$constance = new Femme("PasBernard");
echo "\r\n";
$adam = new Homme("PasBernard");
echo "\r\n";

//echo $marcelline->marcher();
//echo "\r\n";
//echo $marcelline->maTaille();
//echo "\r\n";
//echo $constance->marcher();
//echo "\r\n";
//echo $constance->maTaille();
//echo "\r\n";
//echo $constance->setSecret('hey');
//echo "\r\n";
//echo $marcelline->setSecret('aie');
//echo "\r\n";
//echo $constance->getSecret();
//echo "\r\n";
//echo $marcelline->getSecret();
//echo "\r\n";
echo $adam->getForce();
echo "\r\n";
echo $marcelline->getForce();
echo "\r\n";
echo $marcelline->faireEnfant();
echo "\r\n";
//echo $adam->faireEnfant();
echo $marcelline->courir();
echo "\r\n";
$toto = new Humain("tata");
echo "\r\n";
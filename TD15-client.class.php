<?php

require_once "TD15-personne.class.php";

class Client extends Personne{
private $adresse;
private $tel;

public function __construct($prenom, $nom, $age, $adresse, $tel){
    parent::__construct($prenom, $nom, $age);
    $this->adresse = $adresse;
    $this->tel = $tel;
}

public function parler(){
    echo "blabla";
}


/**
 * Get the value of adresse
 */ 
public function getAdresse()
{
return $this->adresse;
}

/**
 * Set the value of adresse
 *
 * @return  self
 */ 
public function setAdresse($adresse)
{
$this->adresse = $adresse;

return $this;
}

/**
 * Get the value of tel
 */ 
public function getTel()
{
return $this->tel;
}

/**
 * Set the value of tel
 *
 * @return  self
 */ 
public function setTel($tel)
{
$this->tel = $tel;

return $this;
}
}

?>
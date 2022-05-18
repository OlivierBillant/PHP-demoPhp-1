<?php
require_once "TD15-personne.class.php";


class Vendeur extends Personne
{
    private $chiffreAffaire;

    public function __construct($prenom, $nom, $age, $chiffreAffaire)
    {
        parent::__construct($prenom, $nom, $age);
        $this->chiffreAffaire = $chiffreAffaire;
    }

    public function parler(){
        echo "ACHETE CA";
    }

    /**
     * Get the value of chiffreAffaire
     */
    public function getChiffreAffaire()
    {
        return $this->chiffreAffaire;
    }

    /**
     * Set the value of chiffreAffaire
     *
     * @return  self
     */
    public function setChiffreAffaire($chiffreAffaire)
    {
        $this->chiffreAffaire = $chiffreAffaire;

        return $this;
    }
}

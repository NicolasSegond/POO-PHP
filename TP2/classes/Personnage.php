<?php

namespace classes;

class Personnage
{
    const HOMME = true;
    const FEMME = false;

    public static array $lesPersonnages = [];
    private string $nom;
    private string $img;
    private int $age;
    private bool $sexe;
    private int $force;
    private int $agilite;

    public function __construct(string $nom, string $img, int $age, bool $sexe, int $force, int $agilite)
    {
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        self::$lesPersonnages[] = $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function isSexe(): bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): void
    {
        $this->sexe = $sexe;
    }

    public function getForce(): int
    {
        return $this->force;
    }

    public function setForce(int $force): void
    {
        $this->force = $force;
    }

    public function getAgilite(): int
    {
        return $this->agilite;
    }

    public function setAgilite(int $agilite): void
    {
        $this->agilite = $agilite;
    }

    public function afficherPersonnage()
    {
        echo "<div class='gauche'>";
        echo "<img src = 'assets/img/" . $this->getImg() . "' alt = '" .$this->getImg() . "' />";
        echo "</div>";
        echo "<div class='gauche'>";
        echo "</div>";
        echo "<div class='clearB'></div>";
        echo "Nom : " . $this->getNom() . "<br/>";
        echo "Age : " . $this->getAge() . "<br/>";
        if($this->isSexe()){
            echo "Sexe : Homme <br/>";
        } else {
            echo "Sexe : Femme <br/>";
        }
        echo "Force : " . $this->getForce() . "<br/>";
        echo "Agilité : " . $this->getAgilite() . "<br/>";
    }
}
<?php

class Animal
{
    private $nom;
    private $age;
    private $ageMax;
    private $regimeAlimentaire = [];
    private $etat;

    /**
     * @param $nom
     * @param $age
     * @param $ageMax
     */
    public function __construct($nom, $age, $ageMax)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->ageMax = $ageMax;
    }

    public function lire_informations() {
        return 'Le nom de l\'animal : '.$this->nom.', son âge : '.$this->age.' ans et il est '.$this->etat.'.<br>';
    }

    public function manger($aliment){
        //var_dump($aliment);
        if ($this->etat = 'vivant'){
            $this->regimeAlimentaire[] = $aliment;
            //var_dump($this->regimeAlimentaire);
        } else {
            echo 'Un animal mort ne peut pas manger';
        }
    }

    public function vieillir($nbannees){
        $this->age += $nbannees;

        if ($this->age >= $this->ageMax) {
            $this->etat = 'mort';
        } else {
            $this->etat = 'vivant';
        }
    }

    public function lire_regime(){
        // Boucle de lecture
        foreach ($this->regimeAlimentaire as $listeAliments) {
            echo $listeAliments .'<br>';
        }
    }

}

class Chien extends Animal {

    private $nomFamilier;

    /**
     * @param $nomFamilier
     */
    public function __construct($nom, $age, $ageMax,$nomFamilier)
    {
        parent::__construct($nom, $age, $ageMax);
        $this->nomFamilier = $nomFamilier;
    }

    public function seNomme(){
        return 'Le nom familier est '.$this->nomFamilier.'<br>';
    }

    public function lire_informations()
    {
        return parent::lire_informations().' et '.$this->seNomme(); // TODO: Change the autogenerated stub
    }


}
//flaviant3
?>
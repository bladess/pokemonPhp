<?php

class Pokemon{
    private $nom;
    private $pv;
    private $type;
    private $typeFaible;
    private $attaque1;
    private $attaque2;
    private $poids;
    private $taille;
    private $status = "Vivant";
    public function __construct($nom,$pv,$poids,$taille,$type,$typeFaible,$attaque1,$attaque2){
        $this->nom = $nom;
        $this->pv = $pv;
        $this->type = $type;
        $this->taille = $taille;
        $this->typeFaible = $typeFaible;
        $this->attaque1 = $attaque1;
        $this->attaque2 = $attaque2;
        $this->poids = $poids;
    }

    public function attaquer1($pokemon){
        $pokemon->subirAttaque($this->attaque1);
    }
    public function attaquer2($pokemon){
        $pokemon->subirAttaque($this->attaque2);
    }
    public function subirAttaque($attaque){
        if($this->typeFaible == $attaque->getType()){
            $this->pv = $this->pv -  $attaque->getPuissance();
        }
        $this->pv = $this->pv -  $attaque->getPuissance();
        if($this->pv <= 0){
            $this->pv = 0;
            $this->status = "Mort";
        }
    }
    public function afficherFiche(){
        echo "<p>Nom: ".$this->nom ."</p>";
        echo "<p>Pv :".$this->pv."</p>";
        echo "<p>Taille :".$this->taille."</p>";
        echo "<p>Poids :".$this->poids."</p>";
        echo "<p>Type :".$this->type."</p>";
        echo "<p>Faiblesse :".$this->typeFaible."</p>";
        echo "<p>Status :".$this->status."</p>";
        echo "<p>".$this->attaque1->display()."<p>";
        echo "<p>".$this->attaque2->display()."<p>";
    }
                
}
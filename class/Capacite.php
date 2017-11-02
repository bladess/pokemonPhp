<?php

    class Capacite{
        private $type;
        private $nom;
        private $puissance;

        public function __construct($type,$nom,$puissance){
            $this->nom = $nom;
            $this->puissance = $puissance;
            $this->type = $type;

        }
        public function getNom(){
            return $this->nom;
        }

        public function getPuissance(){
            return $this->puissance;
        }

        public function getType(){
            return $this->type;
        }
        public function display(){
            return $this->getNom()." - Type : ".$this->getType()." - Puissance : ".$this->getPuissance();
        }
    }
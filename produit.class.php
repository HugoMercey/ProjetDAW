<?php
    require 'avis.class.php';

    class Produit{
        private int $id;
        private string $nom;
        private string $description;
        private float $prix;
        private array $avis;
        private array $images;




        public function __construct($n, $d, $p){
            $this->nom = $n;
            $this->description = $d;
            $this->prix = $p;
            $this->avis = [];
        }

        public function getNom(){
            return $this->nom;
        }

        public function getDescription(){
            return $this->description;
        }

        public function getPrix(){
            return $this->prix;
        }

    }


?>
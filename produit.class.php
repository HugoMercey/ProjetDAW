<?php
    require 'avis.class.php';

    class Produit{
        private int $id;
        private string $nom;
        private string $description;
        private float $prix;
        private array $avis;
        private array $images;


        public function __construct($id, $n, $d, $p, $i){
            $this->id = $id;
            $this->nom = $n;
            $this->description = $d;
            $this->prix = $p;
            $this->avis = [];
            $this->images = $i;
            // print("Objet créé\n, Nom: $this->nom, \nDescription: $this->description, \nPrix: $this->prix");
        }

        public function encode(){
            $data = [
                "id" => $this->id,
                "nom" => $this->nom,
                "description" => $this->description,
                "prix" => $this->prix,
                "avis" => $this->avis,
                "images" => $this->images
            ];
            return $data;
        }

        public function getId(){
            return $this->id;
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
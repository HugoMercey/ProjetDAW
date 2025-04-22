<?php
    require 'utilisateur.class.php';
    require 'produit.class.php';
    class Panier{
        private int $id;
        private Utilisateur $utilisateur;
        private array $produits;

        public function __construct($i, $u){
            $this->id = $i;
            $this->utilisateur = $u;
            $this->prenom = $p;
            $this->produits = [];
        }
    }
?>
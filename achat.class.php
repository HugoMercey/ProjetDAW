<?php
    require 'produit.class.php';
    require 'utilisateur.class.php';
    class Achat{
        private int $id;
        private Utilisateur $acheteur;
        private DateTime $dateAchat;


        public function __construct($i, $a){
            $this->id = $i;
            $this->acheteur = $a;
            $this->date = new DateTime();
        }
    }
?>
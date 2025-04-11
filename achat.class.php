<?php
    require 'produit.class.php';
    require 'utilisateur.class.php';
    class Achat{
        private int $id;
        private Utilisateur $acheteur;
        private DateTime $dateAchat;
    }


?>
<?php
    require 'avis.class.php';
    require 'achat.class.php';
    class Utilisateur{
        private string $nom;
        private string $prenom;
        private DateTime $dateInscription;
        private array $avis;
        private array $achats;
    }


?>
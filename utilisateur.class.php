<?php
    require 'avis.class.php';
    require 'achat.class.php';
    class Utilisateur{
        private int $id;
        private string $nom;
        private string $prenom;
        private DateTime $dateInscription;
        private array $avis;
        private array $achats;
        private string $photoProfil;
        private string $mail;
        private string $motPasse;


        public function __construct($i, $n, $p, $av, $ac, $p, $m, $mp){
            $this->id = $i;
            $this->nom = $n;
            $this->prenom = $p;
            $this->date = new DateTime();
            $this->avis = [];
            $this->achats = [];
            $this->photoProfil = $p;
            $this->mail = $m;
            $this->motPasse = $mp;
        }

    }

    class Administrateur extends Utilisateur{
    }


?>
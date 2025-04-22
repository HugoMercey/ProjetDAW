<?php
    class Avis{
        private int $id;
        private Utilisateur $utilisateur;
        private DateTime $date;
        private string $description;
        private string $titre;
        private float $note;


        public function __construct($i, $u, $d, $t, $n){
            $this->id = $i;
            $this->utilisateur = $u;
            $this->date = new DateTime();
            $this->description = $d;
            $this->titre = $t;
            $this->note = $n;
        }
    }

?>
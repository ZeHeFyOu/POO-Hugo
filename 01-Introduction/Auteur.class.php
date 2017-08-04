<?php
class Auteur {
    private $Nom,
            $Prenom,
            $Email;
    
    public function __construct (
        $Nom,
        $Prenom,
        $Email) {
        
        $this->Nom      =$Nom;
        $this->Prenom   =$Prenom;
        $this->Email    =$Email;
    } // Fin construct
    
    /*
     * Getters
     */
    
    public function getNom() {
        return $this->Nom;
    }
    public function getPrenom() {
        return $this->Prenom;
    }
    public function getEmail() {
        return $this->Email;
    }
    
    /*
     * Setters
     */
    public function getNomComplet() {
        return $this->NomComplet=$this->Prenom." ".$this->Nom;
    }
    public function setNom($nouveauNom) {
        $this->Nom = ($nouveauNom);
    }
    
    public function setPrenom($nouveauPrenom) {
        $this->Prenom = ($nouveauPrenom);
    }
    
    public function setEmail($nouveauEmail) {
        $this->Email = ($nouveauEmail);
    }
    
} // Fin de ma Classe Auteur
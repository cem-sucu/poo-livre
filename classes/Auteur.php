<?php 

class Auteur{

// mes attributs pour la class Livre
    private string $nom;
    private string $prenom;

// on créé le constuctor
    public function __construct(string $nom, string $prenom){
        $this-> nom = $nom;
        $this-> prenom = $prenom;
    }
//on créé le getter et setter de auteur
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

//on creer getter et setter pour prnenom
     public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
         $this->prenom = $prenom;
// si on veut récupéré l'objet on peut ajouter return $this c'est facultative
        return $this;
    }
}












?>
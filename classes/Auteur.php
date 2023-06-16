<?php 

class Auteur{

// mes attributs pour la class Livre
    private string $nom;
    private string $prenom;
    //ici j'écrit ma variable avec un s ce tableau ("array") va contenir toute les bibliographie potentiel donc tout mes objets..
    private array $bibliographies;

// on créé le constuctor
    public function __construct(string $nom, string $prenom){
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        //ici j'initialise mon array bibliographies vide
        $this->bibliographies = [];
    }
//on créé le getter et setter de auteur
    public function getNom():string{
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

//on creer getter et setter pour prnenom
     public function getPrenom():string{
        return $this->prenom;
    }
    public function setPrenom($prenom){
         $this->prenom = $prenom;
// si on veut récupéré l'objet on peut ajouter return $this c'est facultative
        return $this;
    }

// on créér la méthode toString
public function __toString(){
    return "Livres de " .$this->getNom() ." " .$this->getPrenom() . "<br>";
}

//on creer les getter et setter pour bibliographies
public function getBibliographies(){
    return $this->bibliographies;
   }
   public function setBibliographie($bibliographies){
    $this->bibliographies = $bibliographies;
   }

   public function addBibliographie(Livre $livre){
    $this->bibliographies[] = $livre;
   }

   public function afficherBibliographie(){
    $result = "<h1>Auteur $this</h1>";
    foreach($this->bibliographies as $bibliographies){
        $result .="<li>$bibliographies </li>";
    }

    return $result;
   }
}
?>
<?php

class Livre{

//mes attribut pour la class Auteur
    private string $titre;
    private int $nbrePage;
    private DateTime $anneeParution;
    private float $prix;
    private Auteur $auteur;
  
 
// je créé mon constructor avec mes attributs en paramètre, mais egalement dans le parametre on modifie DateTime $anneParution en string $anneParution pour que à l'entre $anneParution soit une string
    public function __construct(string $titre, int $nbrePage, string $anneeParution, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->nbrePage = $nbrePage;
        // ici en ecrivant new DateTime($anneParution), ca redevient un objet date
        // c'est un bon reflex a avoir. de transformer la chaine de caractere en date time dans le constructor
        $this->anneeParution =new DateTime($anneeParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addBibliographie($this);


    }

// one creer les getter et setter pour titre
// sur les getter on peut deféinir les type de retour
    public function getTitre():string {
        return $this->titre;
    }
    public function setTitre(string $titre){
        $this->titre=$titre;
    }
// on creer getter et setter pour nbrePage
    public function getNbrePage():int {
        return $this->nbrePage;
    }
    public function setNbrePage(int $nbrePage){
        $this->nbrePage = $nbrePage;
    }
//on creer getter et setter pour anneeParution
    public function getAnneeParution(): DateTime {
        return $this->anneeParution;
    }
    public function setAnneeParution(DateTime $anneeParution){
        $this->anneeParution = $anneeParution;
    }
//on creer getter et setter pour prix
    public function getPrix(): float{
        return $this->prix;
    }
    public function setPrix(float $prix){
        $this-> prix = $prix;
    }
//on creer getter et setter pour auteur
   public function getAuteur(): Auteur{
    return $this->auteur;
   }
   public function setAuteur(Auteur $auteur){
    $this->auteur = $auteur;
   }

// ici on créé la function __toString pour afficher les élément en écho
   public function __toString(): string {
    return $this->getTitre() ."(" .$this->getAnneeParution()->format('Y') .") : ".$this->getNbrePage() . " page " ." / " .$this->getPrix() . " € " ."<br>";
   }

}
?>
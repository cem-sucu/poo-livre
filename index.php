<h1>Exercice I : LIVRES</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.Une méthode toString() sera appréciée dans chacune de vos classes.Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :</p>

<h2>Résultat</h2>

<?php

// permet de charger les fichier classe que l'on crééé sans oublier de préciser le chemin du dossier
spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});


$personne = new Auteur(" King ", " Stephen ");
$oeuvre1 = new Livre(" Ca ", 1138, " 1986 ", 20, $personne);
$oeuvre2 = new Livre(" Simetiere ", 374, " 1983 ",15, $personne);
$oeuvre3 = new Livre("Le Fléau ", 823, " 1978 ", 16, $personne);
$oeuvre4 = new Livre("Shining ", 447, " 1977 ", 16, $personne );

// echo $personne->getNom();
// echo $oeuvre->getTitre();

// echo $personne;
// echo $oeuvre1;
// echo $oeuvre2;
// echo $oeuvre3;
// echo $oeuvre4;

echo $personne->afficherBibliographie();
 
?>
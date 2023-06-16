http://localhost/poo-livre/



- un dossier class avec tout les fichier class a l'intérieur

- et index.php toujours a la racine du projet


- dans la racine du projet ce bout de code permet de charger les fichier classe que l'on crééé

````php 
    spl_autoload_register(function ($class_name){
    require $class_name . '.php';
})
````

- lorsque l'on créé un dossier et que l'on glisse les fichier à l'intérieur il nous faut rajouter le chemin dans la function qui se trouve dans l'index comme ici

````php 
    spl_autoload_register(function ($class_name){
    require 'classes/' . $class_name . '.php';
})
````
PHP (Hypertext Preprocessor) est un langage de script côté serveur très populaire pour créer des sites et applications web dynamiques. Voici les bases pour démarrer facilement !

<!-- ------------------------------- -->
<!-- 1. Installer et Configurer PHP -->
<!-- --------------------------------- -->

1. Installer XAMPP
2. Assure-toi que les modules Apache et MySQL sont activés pour tester PHP et gérer des bases de données.
3. Place tes fichiers PHP dans le dossier htdocs de XAMPP (par défaut C:\xampp\htdocs).


<!-- --------------------------------- -->
<!-- 2. Créer ton Premier Fichier PHP -->
<!-- --------------------------------- -->

Crée un fichier avec l’extension .php (ex. index.php) dans le dossier htdocs. Voici un exemple simple :

<?php
echo "Bonjour, PHP !";
?>

<?php ... ?> : Tout code PHP doit être placé entre ces balises.
echo : Utilisé pour afficher du texte ou des variables à l’écran.
Ensuite, dans ton navigateur, accède à ce fichier via http://localhost/index.php. Tu devrais voir apparaître "Bonjour, PHP !".


<!-- -------------------- -->
<!-- 3. Variables en PHP -->
<!-- -------------------- -->
Les variables en PHP commencent par un signe $. Voici comment les déclarer et les utiliser :


<?php
$nom = "Baptiste";
$age = 30;
echo "Bonjour, je m'appelle $nom et j'ai $age ans.";
?>
Ici, $nom et $age sont des variables, et tu peux les afficher directement en les incluant dans la chaîne de caractères.


<!-- ------------------- -->
<!-- 4. Types de Données -->
<!-- ------------------- -->
PHP gère plusieurs types de données courants :

Chaîne de caractères : $texte = "Bonjour";
Entier : $nombre = 42;
Nombre décimal : $decimal = 4.2;
Booléen : $vrai = true; $faux = false;
Tableaux : $jours = ["Lundi", "Mardi", "Mercredi"];


<!-- -------------- -->
<!-- 5. Conditions -->
<!-- -------------- -->
Les conditions te permettent d’exécuter du code selon une situation :

<?php
$age = 20;
if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}
?>
<!-- if et else vérifient si une condition est vraie et exécutent du code en conséquence. -->


<!-- ----------- -->
<!-- 6. Boucles -->
<!-- ----------- -->
Les boucles sont utiles pour répéter des instructions plusieurs fois. Par exemple, une boucle for :

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Ceci est la ligne numéro $i <br>";
}
?>


<!-- ------------- -->
<!-- 7. Fonctions -->
<!-- ------------- -->
Une fonction est un bloc de code que tu peux appeler plusieurs fois. Voici comment définir et utiliser une fonction simple :

<?php
function direBonjour($nom) {
    return "Bonjour, $nom !";
}

echo direBonjour("Baptiste");
?>


<!-- ---------------------- -->
<!-- 8. Formulaires et PHP -->
<!-- ---------------------- -->
PHP est souvent utilisé pour traiter des formulaires HTML. Voici un exemple de formulaire simple avec PHP :

<form action="traitement.php" method="POST">
    Nom : <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>

PHP (traitement.php) :

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    echo "Bonjour, $nom !";
}
?>
Ici, le code PHP récupère la valeur de nom envoyée par le formulaire et l’affiche.


<!-- ----------------------------- -->
<!-- 9. Inclure des Fichiers PHP -->
<!-- ----------------------------- -->
Parfois, tu voudras organiser ton code en fichiers séparés. Utilise include ou require :


<?php
include "header.php";
echo "Contenu principal";
include "footer.php";
?>
include insère le contenu d’un fichier PHP. require fonctionne pareil mais stoppe l’exécution si le fichier est introuvable.


<!-- ---------------------------------------------------- -->
<!-- 10. Utiliser PHP pour Connecter une Base de Données -->
<!-- ---------------------------------------------------- -->
En PHP, on utilise souvent MySQL pour gérer des bases de données. XAMPP fournit MySQL et PHPMyAdmin pour te faciliter la gestion des données.
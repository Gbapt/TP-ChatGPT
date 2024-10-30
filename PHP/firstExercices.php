<!-- Niveau Facile -->
<!-- Exercice 1 -->
 
<?php
  $prenom = "Baptiste";

  echo "Bonjour, $prenom !";
?><br>


<!-- Exercice 2 -->

<?php
  $a = 2;
  $b = 8;

  echo ($a + $b);
?>


<!-- Exercice 3 -->

<form action="" method="POST">
  Entrez votre age : <input type="number" name="age">
  <button type="submit">Envoyer</button>
</form>

<?php
  if (isset($_POST["age"])&& $_POST["age"] !== "") { // isset($_POST["age"]) : Vérifie que l'entrée "age" existe dans $_POST. / $_POST["age"] !== "" : Assure que le champ n'est pas vide, pour éviter d'interpréter un champ vide comme un zéro.
    if ($_POST["age"] >= 18) { // Ici on vérifie si l'age est supérieur ou égal à 18.
      echo "Vous êtes majeur";
    }
    else {
      echo "Vous êtes mineur";
    }
  }
?><br>


<!-- Exercice 4 -->

<?php
  $largeur = 3;
  $longueur = 5;

  echo ($longueur * $largeur);
?><br>


<!-- Niveau Intermédiaire -->
<!-- Exercices 5 -->

<?php
  $nombre = 10;

  for ($count = 0; $count <= $nombre; $count++) {
    echo "$count <br>";
  }
?>


<!-- Exercices 6 -->

<form action="" method="POST">
  Entrez un nombre : <input type="number" name="number">
  <button type="submit">Envoyer</button>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"]) && $_POST["number"] !== "") { // Ici on vérifie que l'utilsateur à bien entrez un nombre pour passer à la suite & si il n'est pas null avec 'isset($variable)'.
    $number = (int)$_POST["number"]; // (int)$_POST["number"] : Convertit la valeur de $_POST["number"] en entier, ce qui permet d'éviter l'erreur TypeError lors de l'utilisation de l'opérateur modulo (%).
    if ($number % 2 != 0) { // Divise par 2 le nombre donner par l'utilisateur et vérifie si le reste de la division est inégale à zéro, Si c'est le cas le nombre est impair.
      echo "nombre impair";
    }
    else {
      echo "nombre pair";
    }
  }
?>


<!-- Exercices 7 -->

<form action="" method="POST">
  Entrez votre montant hors taxe : <input type="number" name="numberHT" min="0.01" step="0.01">
  <button type="submit">Envoyer</button>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numberHT"]) && $_POST["numberHT"] !== "") {

    $numberHT = (float)$_POST["numberHT"]; // (float)$_POST["numberHT"] : Cette conversion garantit que $numberHT sera un nombre à virgule flottante, ce qui permet de l’utiliser sans erreur avec les opérations arithmétiques.

      if ($numberHT > 0) {

      $numberTVA = (($numberHT * 0.2) + $numberHT);
      echo "Le montant TTC est de " .number_format($numberTVA, 2) . " €";
      }
      else {
        echo "Veuillez entrer un montant supérieur à zéro."; // Pas obligatoire car les nombres en dessous de zéro ne peuve être validé grâce à min= "0.01" dans le formulaire.
      }
    }
?>


<!-- Exercices 8 -->

<form action="" method="POST">
Entrez le montant(€) que vous souhaitez convertir en dollars($) : <input type="number" name="numberEuros" min="0.01" step="0.01">
  <button type="submit">Envoyer</button>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numberEuros"]) && $_POST["numberEuros"] !== "") {
    $numberEuros = (float)$_POST["numberEuros"];
    
    $tauxDeConversion = 1.1;
    $numberDollars = $numberEuros * $tauxDeConversion;

    echo "Le montant {$numberEuros} € vaut {$numberDollars} $";
  }
?>
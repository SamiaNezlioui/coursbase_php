<?php
$string = "Sam DIEB";
echo $string;
echo "<br>";

// la function strtolower() =>renvoie une chaîne en miniscules
echo strtolower($string);

// la function strtoupper() =>renvoie une chaîne en Majuscules
echo "<br>";
echo strtoupper($string);

// la function strlen() =>Calcule la taille d'une chaîne
echo "<br>";
echo strlen($string);

echo "<br>";
echo $string[7];

echo "<br>";
$string[7] = "a";
echo $string;

// la function str_replace() =>Remplace toutes les occurrences dans une chaîne
echo "<br>";
echo str_replace("Sam", "Anya", $string);

//la function substr() =>Retourne un segment de chaîne
echo "<br>";
echo substr($string, 5, 4);
?>
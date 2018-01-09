<?php

include "fonctions.php";

echo prepareBoisson($_POST["boisson"], $_POST["sucre"]);


$boissons = array(
1 => array('café' => 2, 'eau' => 2 ),
2 => array('café' => 1, 'eau' => 2),
3 => array('thé' => 1, 'eau' => 1)
);

foreach($boissons as $cle1 => $valeur1)
{
  echo "La recette est" . $cle1 . "<br />";

    foreach ($valeur1 as $cle2=>$valeur2)

    {
      echo "Clé : ".$cle2 .", Valeur: " . $valeur2 . "<br />\n";
    }
}



?>
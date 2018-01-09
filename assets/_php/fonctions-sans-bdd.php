<?php

/* Déclaration des variables */

$date = date("l d F Y"); // Déclaration d'une variable $date qui prend pour valeur la fonction date avec les paramètres le jour (nom + numéro) le mois et l'année
$heure = date("H"); // Déclaration d'une variable $heure qui prend pour valeur la fonction date avec le paramètre Heure
$minutes  = date("i"); // Déclaration d'une variable $minutes qui prend pour valeur la fonction date avec le paramètre minutes
$messageAttente = "Vous voulez un café ou bien ?"; // Déclaration d'un variable $messageAttente qui prend pour valeur la chaine de caractères du message d'attente
$argentInsere = 0; // Déclaration de la variable $argentInsere qui prend pour valeur 0


/* Déclaration des fonctions : Version avec Tableau Interne */

// version avec tableau interne à la page PHP
      // Teste si la variable existe
      if (isset($_POST["choixBoisson"]) AND isset($_POST["choixSucre"])) {
        echo "Vous avez choisi '" . $_POST["choixBoisson"] . "', dont la recette est :<br>";
        echo prepareBoisson($_POST["choixBoisson"], $_POST["choixSucre"]);
      } else {
        echo $messageAttente;
      }

/* Recette du café Long en fonction du nombre de sucres */
function cafeLong ($nbSucres) {
  
  $recetteCafeLong = array();

  array_push ($recetteCafeLong," Café x 2 doses");
  array_push ($recetteCafeLong," Eau x 2 doses");

  $recetteCafeLong = ajouterSucre($recetteCafeLong, $nbSucres);
  
  return join(",", $recetteCafeLong);

}

/* Recette de l'expresso en fonction du nombre de sucres */
function expresso ($nbSucres) {
  
  $recetteExpresso = array();

  array_push ($recetteExpresso," Café x 1 dose");
  array_push ($recetteExpresso," Eau x 1 dose");

  $recetteExpresso = ajouterSucre($recetteExpresso, $nbSucres);
  
  return join(",", $recetteExpresso);

}

/* Recette du thé en fonction du nombre de sucres */
function the ($nbSucres) {
  
  $recetteThe = array();

  array_push ($recetteThe, " Thé x 1 dose");
  array_push ($recetteThe, " Eau x 2 doses");
  
  $recetteThe = ajouterSucre($recetteThe, $nbSucres);
  
  return join(",", $recetteThe);

}

// Fonction qui permet d'éviter de répéter le code
// Affichage selon le nombre de sucres
function ajouterSucre($recetteTab, $nbSucres) {
  if ($nbSucres == 1) {
    array_push($recetteTab, " Sucre x " . $nbSucres);
  } else if ($nbSucres > 1) {
    array_push($recetteTab, " Sucres x " . $nbSucres);
  } else if ($nbSucres == 0) {
    array_push($recetteTab, " Sans sucre");
  }

  return $recetteTab;
}



/* Préparation d'une boisson avec son nom et les fonctions ci-dessus */

 function prepareBoisson($boisson, $nbSucres) {
  if ($boisson === "Café Long") {
    $recetteCommande = cafeLong($nbSucres);
  } else if ($boisson === "Expresso") {
    $recetteCommande = expresso($nbSucres);
  } else if ($boisson === "Thé") {
    $recetteCommande = the($nbSucres);
  } else {
    $recetteCommande = "Choisissez votre boisson SVP";
  }
  
 	return $recetteCommande;
} 

// Affiche chacune des boissons avec leur recette 
// echo var_dump($boissonsTab);


// Version sans BDD : Création d'un tableau multidimentionnel avec les recettes
$boissonsTab = array(
    "Café Long" => array(
    "Café" => 2,
    "Eau"  => 2
  ),
    "Expresso" => array(
    "Café" => 1,
    "Eau"  => 1
  ),
    "Thé" => array(
    "Thé" => 1,
    "Eau" => 1
  ),
    "Café au Lait" => array(
    "Café" => 1,
    "Lait" => 1,
    "Eau"  => 2
  ),
);

// Version sans BDD : Affiche la recette d'UNE SEULE boisson
function prepare($recette) {
	$liste = "";
	foreach($recette as $ingredient => $quantite)
	{
    $liste .= $ingredient . " x " . $quantite . "<br/>";	// ($liste .= $ingredient) est équivalent à ($liste = $liste . $ingredient)
  }
  return $liste;
}

// Version sans BDD : Fonction qui utilise le tableau interne à la page
function prepareBoisson($boisson, $nbSucres) {
  global $boissonsTab;
  
  if ($boisson == "Café Long") {
    $recette = $boissonsTab["Café Long"];
  } else if ($boisson == "Expresso") {
    $recette = $boissonsTab["Expresso"];
  } else if ($boisson == "Thé") {
    $recette = $boissonsTab["Thé"];
  } else if ($boisson == "Café au Lait") {
    $recette = $boissonsTab["Café au Lait"];
  }

  if ($nbSucres > 0) {
    $recette["Sucre"] = $nbSucres;
  }
  
  return prepare($recette);
} 


?>
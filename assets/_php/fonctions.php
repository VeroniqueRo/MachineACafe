<?php

/* Déclaration des variables */

$date = date("l d F Y"); // Déclaration d'une variable $date qui prend pour valeur la fonction date avec les paramètres le jour (nom + numéro) le mois et l'année
$heure = date("H"); // Déclaration d'une variable $heure qui prend pour valeur la fonction date avec le paramètre Heure
$minutes  = date("i"); // Déclaration d'une variable $minutes qui prend pour valeur la fonction date avec le paramètre minutes
$argentInsere = 0; // Déclaration de la variable $argentInsere qui prend pour valeur 0
$messageAttente = "Vous voulez un café ou bien ?";

/* Déclaration des fonctions : Version avec BDD EXTERNE */

// Fonction de connection à la BDD
function connection(){
    //teste les infos d'accès à la base de données
    try 
    {
      // connexion à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=machineacafe;charset=utf8', 'vero', 'MotDePasse38');  
    }
    catch (Exception $e)
    {
      // en cas d'erreur, affiche un message et s'arrête
      die('Erreur : '.$e->getMessage());
    }
    return $bdd;
  }

// Fonction qui utilise les informations de la BDD
function menuDeroulant() {

  $bdd = connection();
  $menu = "";
  $reqDrinkName = $bdd->query('SELECT nomboisson FROM boisson');

  // affiche chaque entrée une à une
  while ($tabDrinkName = $reqDrinkName->fetch())
  {
    // ajoute une balise de champs de menu déroulant avec les données de la BDD externe
    $menu .= "<option>".$tabDrinkName["nomboisson"]."</option>";
  }
  return $menu;
  $reqDrinkName->closeCursor();
}
  
function afficheRecette($choixBoisson, $choixSucres) {
  
  $bdd = connection();
  $i=0;
  $recetteFinale = "";
  
  // Si la connexion est ok, récupère la liste des boissons 
  $reponseBddMachineacafe = $bdd->prepare('
  SELECT  nomboisson, nomingredients, qteboisson
  FROM boisson_ingredients
  INNER JOIN boisson ON boisson.codeboisson = boisson_ingredients.boisson_codeboisson
  INNER JOIN ingredients ON ingredients.codeingredients = boisson_ingredients.ingredients_codeingredients
  WHERE nomboisson = :nomboisson
  '); // Identique à WHERE nomboisson = ?

  $reponseBddMachineacafe->execute(array('nomboisson'=> $choixBoisson)); // Avec le ? s'écrit : execute(array($_POST["choixBoisson"]));
 
  // affiche chaque entrée une à une
  while ($tabDonnees = $reponseBddMachineacafe->fetch())
  {
    if ($i==0)
    {
      $i=1;// Affiche le nom de la boisson une seule fois
      $recetteFinale .= " Vous avez commandé un ".$tabDonnees["nomboisson"]."<br>";
    }
      $recetteFinale .= $tabDonnees["nomingredients"]." x ".$tabDonnees["qteboisson"]."<br>";
    
  }

  if ($choixSucres > 0)
  {
      $recetteFinale .=  "avec ".$choixSucres . " sucre(s)" ."<br>";
  }

  return $recetteFinale;
  $reponseBddMachineacafe->closeCursor(); // Termine le traitement de la requête
}

?>
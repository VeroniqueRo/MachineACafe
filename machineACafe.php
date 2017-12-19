<?php
	$date = date("l d F Y"); // Déclaration d'une variable $date qui prend pour valeur la fonction date avec les paramètres le jour (nom + numéro) le mois et l'année
	$heure = date("H"); // Déclaration d'une variable $heure qui prend pour valeur la fonction date avec le paramètre Heure
	$minutes  = date("i"); // Déclaration d'une variable $minutes qui prend pour valeur la fonction date avec le paramètre minutes
	$boissons = array("Thé Menthe","Chocolat","Café","Capuccino"); // Déclaration d'une variable $boissons qui prend pour valeur la fonction tableau comprenant les paramètres des 4 boissons
	$liste ="";// Déclaration d'une variable $liste qui prend pour valeur une chaine de caractères vide
	foreach ($boissons as $uneBoisson) { // fonction foreach qui parcoure en boucle chaque élément du tableau $boissons et renvoie l'élément dans la variable $uneBoisson
			$liste = $liste ."<button>$uneBoisson</button>"; // Affecte à la variable $liste l'élément $uneBoisson dans une balise bouton
			}
	$messageAttente = "Choisissez votre boisson..."; // Déclaration d'un variable $messageAttente qui prend pour valeur la chaine de caractères du message d'attente
	$argentInsere=0; // Déclaration de la variable $argentInsere qui prend pour valeur 0

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Machine à café en php</title>
	<!-- liens vers les librairies jquery et bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <!-- liens vers les librairies locales-->
    <link rel="stylesheet" href="machineACafe.css">
    <script src="machineACafe.js"></script>

</head>
<body>
	<div class="mainContener">

		<h1>Ma Machine à café en PHP</h1>
		
		<div id="afficheurInfo" class="date">
			Today is  <?= $date?> <!-- Insertion de la date du jour en php -->
			il est <?= $heure?> <!-- Insertion de l'heure en php -->
		    heures et <?=$minutes?> minutes <!-- Insertion des minutes en php -->
		</div>
		
		<div id="boissons">

			<?= $liste ?> <!-- Insertion de la liste en php : inserera les boutons de chaque boissons créés par la boucle foreach -->
			
		</div>

		<div id="afficheurInfo" class="messageAttente">

			<?= $messageAttente ?><br> <!-- Insertion du message d'attente en php -->
			
		</div>
		<div id="afficheurInfo" class="argentInsere">
			Solde = 
			<?= $argentInsere ?> <!-- Insertion de l'argent inséré en php -->
			.00 €
		</div>

		<!-- <tr>
				    <td id="btnResetDrink"><button>Reset Drink</button></td>
				</tr>
			 -->
		
	   	<div id="pieces">
	       	<img id="btnCinqCts" class="piece" alt="0.05" src="images/5_cts.png">
	        <img id="btnDixCts" class="piece" alt="0.10" src="images/10_cts.png">
	        <img id="btnVingtCts" class="piece" alt="0.20" src="images/20_cts.png">
	        <img id="btnCinquanteCts" class="piece" alt="0.50" src="images/50_cts.png">
	        <img id="btnUnEuro" class="piece" alt="1.00" src="images/1_euros.png">
	        <img id="btnDeuxEuros" class="piece" alt="2.00" src="images/2_euros.png">
	    </div>
		    <div id="afficheurMonnaie">
		        <div id="monnayeur">Crédit : 0.00 €</div>
			</div>
			<div id="btnResetCoin"><button>Reset Coin</button></div>
	</div>
</body>
</html>
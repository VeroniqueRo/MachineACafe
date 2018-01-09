<?php
	//lien vers les fonctions php
	include "assets/_php/fonctions.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Machine à café en php</title>
	<!-- liens vers les librairies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/_css/machineACafe.css">

</head>
<body>
	<div class="mainContener">
		<h1>Ma Machine à café en PHP</h1>
		
		<div id="afficheurInfo" class="date">
			Today is <?= $date?> <!-- Insertion de la date du jour en php -->
			il est <?= $heure?> <!-- Insertion de l'heure en php -->
		    heures et <?=$minutes?> minutes <!-- Insertion des minutes en php -->
		</div>

		<div class="blocInfos">
			<form method="post" action="machineACafe.php">
				<select name="choixBoisson">
					<option>Choisissez votre boisson</option>
					<?php 
					//Version avec données dans un tableau interne à la page
					foreach ($boissonsTab as $boisson => $recette)
					{
						echo "<option>" . $boisson . "</option>";
					}
					?>
				</select>
				<input type="number" min="0" max="5" name="choixSucre" placeholder="Combien de sucres ?"/>
				<input type="submit" value="Valider"/>
			</form>
			<p>
			<?php
			// version avec tableau interne à la page PHP
			// Teste si la variable existe
			if (isset($_POST["choixBoisson"]) AND isset($_POST["choixSucre"]))
			{
				echo "Vous avez choisi '" . $_POST["choixBoisson"] . "', dont la recette est :<br>";
 				echo prepareBoisson($_POST["choixBoisson"], $_POST["choixSucre"]);
			} 
			else 
			{
				echo $messageAttente;
			}
			?>
			</p>
		</div>

		<div class="blocInfos">
			
			<?php

			

			?>

			<!-- 
			Solde = 
			<?= $argentInsere ?> //Insertion de l'argent inséré en php
			.00 €
			-->

		</div>
		
	   	<!-- <div id="pieces">
	       	<img id="btnCinqCts" class="piece" alt="0.05" src="images/5_cts.png">
	        <img id="btnDixCts" class="piece" alt="0.10" src="images/10_cts.png">
	        <img id="btnVingtCts" class="piece" alt="0.20" src="images/20_cts.png">
	        <img id="btnCinquanteCts" class="piece" alt="0.50" src="images/50_cts.png">
	        <img id="btnUnEuro" class="piece" alt="1.00" src="images/1_euros.png">
	        <img id="btnDeuxEuros" class="piece" alt="2.00" src="images/2_euros.png">
	    </div> -->
		    <!-- <div id="afficheurMonnaie">
		        <div id="monnayeur">Crédit : 0.00 €</div>
			</div>
			<div id="btnResetCoin"><button>Reset Coin</button></div> -->
	</div>
</body>
</html>
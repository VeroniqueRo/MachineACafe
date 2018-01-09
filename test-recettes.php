<?php
	include "assets/_php/fonctions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Test recettes en php</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/_css/machineACafe.css">
    

</head>
<body>

	<h1>Mes test de recettes</h1>
		
		<div id="afficheurInfo" class="date">
			La recette de café long est : <?= cafeLong($choixSucre)?>
			<br>
			La recette de l'expresso est : <?= expresso($choixSucre)?>
			<br>
			La recette du thé est : <?= the($choixSucre)?>

			Vous avez choisi : <?= $choixBoisson ?><br>
			machineACafe.php

		</div>

</body>
</html>
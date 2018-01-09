// Déclaration des variables

let nbSucres = 0;
let caisseEntree = 0;                 
let COMPTEUR = 0;

// Déclaration des fonctions

function selectDrink(doSelect, drink) {
	if (drink === 'chocolat');
		if (doSelect === true) {
		$("#btnChocolat").attr("src", "images/btn_chocolat_2.png");
	} else {
		$("#btnChocolat").attr("src", "images/btn_chocolat_0.png");
	}
};

// fonction addSugar() ajoute un sucre quand on appuie sur le bouton plus

// function addSugar() {
// 	if (nbSucres <5) {
// 		nbSucres = nbSucres + 1;
// 	}  
// 	console.log(nbSucres);
// 	if (nbSucres === 1) {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_vide.png");
// 		$("#sucreTrois").attr("src", "images/sucre_vide.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 2)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_vide.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 3)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_plein.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 4)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_plein.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_plein.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 5)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_plein.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_plein.png");
// 		$("#sucreCinq").attr("src", "images/sucre_plein.png");
// 	}
// }

// Fonction addSugar() choisie version Géraud

function addSugar(){
	if (nbSucres <5) {
		nbSucres += 1;
	}  

	$(".sucre").each(function(index){
		if (index < nbSucres) {
			$(this).attr("src", "images/sucre_plein.png");
		} else {
			$(this).attr("src", "images/sucre_vide.png");
		}
	})
}


// fonction ​​removeSugar() ​​retire un sucre quand on appuie sur le bouton moins

// function removeSugar() {

// 	if (nbSucres >0) {
// 		nbSucres = nbSucres - 1 ;
// 	}  
// 	console.log(nbSucres);
// 	if (nbSucres === 1) {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_vide.png");
// 		$("#sucreTrois").attr("src", "images/sucre_vide.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 2)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_vide.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 3)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_plein.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 4)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_plein.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_plein.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	} else if (nbSucres === 5)  {
// 		$("#sucreUn").attr("src", "images/sucre_plein.png");
// 		$("#sucreDeux").attr("src", "images/sucre_plein.png");
// 		$("#sucreTrois").attr("src", "images/sucre_plein.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_plein.png");
// 		$("#sucreCinq").attr("src", "images/sucre_plein.png");
// 	} else {
// 		$("#sucreUn").attr("src", "images/sucre_vide.png");
// 		$("#sucreDeux").attr("src", "images/sucre_vide.png");
// 		$("#sucreTrois").attr("src", "images/sucre_vide.png");
// 		$("#sucreQuatre").attr("src", "images/sucre_vide.png");
// 		$("#sucreCinq").attr("src", "images/sucre_vide.png");
// 	}
// }

// Fonction removeSugar() choisie version Géraud

function removeSugar() {
	
		if (nbSucres >0) {
			nbSucres = nbSucres - 1 ;
		}  

	$(".sucre").each(function(index){
		if (index < nbSucres) {
			$(this).attr("src", "images/sucre_plein.png");
		} else {
			$(this).attr("src", "images/sucre_vide.png");
		}
	})
}



// fonction ​​resetDrink() ​​désélectionne ​​toutes ​​les ​boissons

function resetDrink() {

	let drinkPictures = $('.boisson').parent().children('img');
	// console.log(drinkPictures);
    drinkPictures.each(function(){
        $(this).attr('src','images/btn_chocolat_0.png');
    });
    
}

// Affiche ​ ​la ​ ​somme ​ ​introduite ​ ​dans ​ ​le ​ ​monnayeur

function addCoin(coin) {
	COMPTEUR += coin;
	// Je gère les problèmes de virgules
	
	let resultatAAfficher= Math.round((COMPTEUR)*100) /100;
	console.log(resultatAAfficher);
	
	// Je gère l'affichage avec 2 chiffres après la virgule

	resultatAAfficher = resultatAAfficher.toFixed([2]);

		$("#afficheurMonnaie").html("Crédit : " + resultatAAfficher + " €");
	// }
	
}


// script global

$(document).ready(function(){


	$( "#btnChocolat").click(function() {

		let isOn=true;
		let srcImageActuelle = $("#btnChocolat").attr("src");

		if (srcImageActuelle === "images/btn_chocolat_0.png") {
			isOn = true;
		} else {
			isOn = false;
		}
		selectDrink(isOn,'chocolat');

	});


	$("#btnResetDrink").click(function(){
		resetDrink();
	})


	$("#btnPlusSucre").click(function(){
		addSugar();
	});


	$("#btnMoinsSucre").click(function(){
		removeSugar();
	});

	$(".piece").click(function(){
		let coin = parseFloat($(this).attr('alt'));
		addCoin(coin);
	});

	$("#btnResetCoin").click(function(){
		resetCoin();
	})
});




// 

// // Ajoutez ​ ​un ​ ​bouton ​ ​de ​ ​rendu ​ ​de ​ ​monnaie

// // Implémentez ​ ​une ​ ​fonction ​ ​​resetCoins() ​ ​qui ​ ​permet ​ ​de ​ ​rendre ​ ​la ​ ​monnais ​ ​(réinitialiser le ​ ​COMPTEUR)

// function resetCoins() {

// };
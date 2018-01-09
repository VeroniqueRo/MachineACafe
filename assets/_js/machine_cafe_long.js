
/* Affichage des tâches successives avec recette de Café Long en fonction du nombre de sucres */

function cafeLong (nbSucres) {
  
  let recetteCafeLong = [];
  
  recetteCafeLong.push("Café Long");
  recetteCafeLong.push("Café : 2 doses");
  recetteCafeLong.push("Eau : 5 doses");


   /* Boucle définissant l'affichage selon le nombre de sucres */
  
  if (nbSucres === 1) {
    recetteCafeLong.push('sucre : ' + nbSucres + ' morceau');
  } else if (nbSucres >1){
    recetteCafeLong.push('sucres : ' + nbSucres + ' morceaux');
  } else if (nbSucres === 0){
    recetteCafeLong.push('sans sucre');
  }
  
  return recetteCafeLong;
}

/* Ecriture de la liste finale des tâches successives en colonne */

let tableauMateriel = ["gobelet"];
let recetteCafeLong = cafeLong(1);
let tableauOption = ["Touillette"];
let total = tableauMateriel.concat(recetteCafeLong,tableauOption);

function processus1 (maListe) {
  for (let tachesIndex = 0; tachesIndex < maListe.length; tachesIndex++) {
    console.log(maListe[tachesIndex]);
  }
}

processus1 (total);
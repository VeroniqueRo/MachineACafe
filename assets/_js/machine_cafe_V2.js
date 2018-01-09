
/* Recette Expresso en fonction du nombre de sucres */

function expresso(nbSucres) {
  
  let recetteExpresso = [];//création d'un tableau vide pour mettre les éléments de la recette
  
  recetteExpresso.push("Vous avez choisi un Expresso");//Ajout de l'élément dans le tableau qui sera affiché
  recetteExpresso.push("Café : 1 dose");//idem à la suite du premier
  recetteExpresso.push("Eau : 2 doses");//idem
  
  /* Boucle définissant l'affichage selon le nombre de sucres */
  
  if (nbSucres === 1) {// comparaison du nombre de sucres avec 1
    recetteCafeLong.push('sucre : ' + nbSucres + ' morceau');// dans ce cas afficher "sucre : 1 morceau"
  } else if (nbSucres >1){//sinon vérifie si le nombre de sucres est supérieur à 1
    recetteCafeLong.push('sucres : ' + nbSucres + ' morceaux');// dans ce cas afficher "sucres : x morceaux"
  } else if (nbSucres === 0){// sinon vérifie si le nombre de sucres est égal à 0
    recetteCafeLong.push('sans sucre');// dans ce cas afficher "sans sucre"
  }
  
  return recetteExpresso;// Permet de donner le résultat de la fonction
}


/* Recette Café Long en fonction du nombre de sucres */

function cafeLong(nbSucres) {
  
  let recetteCafeLong = [];//création d'un tableau vide pour mettre les éléments de la recette
  
  recetteCafeLong.push("Vous avez choisi un Café Long");
  recetteCafeLong.push("Café : 2 doses");
  recetteCafeLong.push("Eau : 5 doses");
  
  /* Boucle définissant l'affichage selon le nombre de sucres */
  
  if (nbSucres === 1) {// comparaison du nombre de sucres avec 1
    recetteCafeLong.push('sucre : ' + nbSucres + ' morceau');// dans ce cas afficher "sucre : 1 morceau"
  } else if (nbSucres >1){//sinon vérifie si le nombre de sucres est supérieur à 1
    recetteCafeLong.push('sucres : ' + nbSucres + ' morceaux');// dans ce cas afficher "sucres : x morceaux"
  } else if (nbSucres === 0){// sinon vérifie si le nombre de sucres est égal à 0
    recetteCafeLong.push('sans sucre');// dans ce cas afficher "sans sucre"
  }
  
  return recetteCafeLong;// Permet de donner le résultat de la fonction
  
}

/* Recette Décaféiné en fonction du nombre de sucres */

function decafeine(nbSucres) {

    let recetteDecafeine = [];//création d'un tableau vide pour mettre les éléments de la recette
    
    recetteDecafeine.push("Vous avez choisi un Décaféiné");	
	recetteDecafeine.push("Café : 2 doses");
    recetteDecafeine.push("Eau : 5 doses");
  
  /* Boucle définissant l'affichage selon le nombre de sucres */
  
  if (nbSucres === 1) {// comparaison du nombre de sucres avec 1
    recetteCafeLong.push('sucre : ' + nbSucres + ' morceau');// dans ce cas afficher "sucre : 1 morceau"
  } else if (nbSucres >1){//sinon vérifie si le nombre de sucres est supérieur à 1
    recetteCafeLong.push('sucres : ' + nbSucres + ' morceaux');// dans ce cas afficher "sucres : x morceaux"
  } else if (nbSucres === 0){// sinon vérifie si le nombre de sucres est égal à 0
    recetteCafeLong.push('sans sucre');// dans ce cas afficher "sans sucre"
  }
  
  return recetteDecafeine;// Permet de donner le résultat de la fonction
  
}

/* Création de la liste selon la demande du client */

function machineCafe(boisson, nombreSucre){
  let recette = [];//création d'un tableau vide pour mettre les éléments de la recette finale choisie
	
  /* Boucle définissant l'affichage selon le nombre de sucres */

  if (boisson === 'Café Long'){
    recette=cafeLong(nombreSucre);
  } else if (boisson ==='Expresso'){
    recette=expresso(nombreSucre);
  } else if (boisson ==='Décaféiné'){
    recette=decafeine(nombreSucre);
  } 

  let tableauMateriel = ['gobelet '];//Création d'un tableauMateriel avec l'élément Gobelet
  let tableauOption =['touillette'];//Création d'un tableauOption avec l'élément Touillette
  let resultat=tableauMateriel.concat(recette);//Regroupement dans le tableau total des éléments des deux tableaux précédents
  
  if (nombreSucre >0){
    resultat=resultat.concat(tableauOption);
    }
  
  return resultat;// Permet de donner le résultat de la fonction
}

/* Ecriture de la liste finale des tâches successives en colonne */

function processus1 (maListe) {
  for (let tachesIndex = 0; tachesIndex < maListe.length; tachesIndex++) { //Boucle récupérant les éléments du tableau
    console.log(maListe[tachesIndex]);//Affichage de la liste sur la console
  }
}


processus1 (machineCafe('Expresso',0));//Commande d'un Expresso sans sucre
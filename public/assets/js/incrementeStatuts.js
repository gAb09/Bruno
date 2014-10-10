/*----------  Pointage web = marquage comme pointé selon l'état fourni sur le site Caisse d´Épargne 
Changement de la couleur du fond de ligne et update du pointage (pages "Pointage") -----------*/

function bascule_statut_pointage(xxx) {// aFa automatiser l'attribution du nom de la classe 

	// Obtenir l'id de la ligne via le bouton
	var id_ecriture = xxx.id.replace('btn_', '');

	// Assigner la variable row (ligne qui changera de classe)
	var row = document.getElementById('row_' + id_ecriture);

	// Assigner la variable input (ligne qui changera de classe)
	var input = document.getElementById('input_' + id_ecriture);


	// Incrémenter le statut en tenant compte des statuts accessibles
	var statut_actuel = parseInt(input.value, 10);

	var part = statuts_accessibles.split("-");
	var nbre = part.length - 1;
	var last_statut_accessible = part[nbre];

	var new_statut = '';

	if(statut_actuel < last_statut_accessible){
		new_statut = statut_actuel + 1;
	}else{
		new_statut = statuts_accessibles[0];
	}

	// Changer la classe
	row.className = classe_statut_selon_id[new_statut];

	// Actualiser le statut dans input 
	input.value = new_statut;
}
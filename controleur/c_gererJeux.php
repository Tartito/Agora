<?php

	if (!isset($_POST['cmdAction'])) {
		 $action = 'afficherGenres';
	}
	else {
		// par défaut
		$action = $_POST['cmdAction'];
	}

	$idJeuxModif = -1;		
    $notification = 'rien';
/*
	switch($action) {

		case 'ajouterNouveauGenre': {		
			if (!empty($_POST['txtLibGenre'])) {
				$idGenreNotif = $db->ajouterGenre($_POST['txtLibGenre']);
				// $idGenreNotif est l'idGenre du genre ajouté
				$notification = 'Ajouté';	// sert à afficher l'ajout réalisé dans la vue
			}
		  break;
		}

		case 'demanderModifierGenre': {
				$idGenreModif = $_POST['txtIdGenre']; // sert à créer un formulaire de modification pour ce genre
			break;
		}
			
		case 'validerModifierGenre': {
			$db->modifierGenre($_POST['txtIdGenre'], $_POST['txtLibGenre']); 
			$idGenreNotif = $_POST['txtIdGenre']; // $idGenreNotif est l'idGenre du genre modifié
			$notification = 'Modifié';  // sert à afficher la modification réalisée dans la vue
			break;
		}

		case 'supprimerGenre': {
			$idGenre = $_POST['txtIdGenre'];
			$db-> supprimerGenre($idGenre);
			break;
		}
	}
*/		
	
$tbJeux  = $db->getLesJeux();		
require 'vue/v_lesJeux.php';

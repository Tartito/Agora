<?php
	// si le paramètre action n'est pas positionné alors
	//		si aucun bouton "action" n'a été envoyé alors par défaut on affiche les genres
	//		sinon l'action est celle indiquée par le bouton

	if (!isset($_POST['cmdAction'])) {
		 $action = 'afficherPegi';
	}
	else {
		// par défaut
		$action = $_POST['cmdAction'];
	}

	$idPegiModif = -1;		// positionné si demande de modification
	$notification = 'rien';	// pour notifier la mise à jour dans la vue

	// selon l'action demandée on réalise l'action 
	switch($action) {

		case 'ajouterNouveauPegi': {		
			if (!empty($_POST['txtdescPegi'] and $_POST['txtageLimite']) ) {
                $idPegiNotif = $db->ajouterPegi( $_POST['txtdescPegi'], $_POST['txtageLimite']);
                
				// $idGenreNotif est l'idGenre du genre ajouté
				$notification = 'Ajouté';	// sert à afficher l'ajout réalisé dans la vue
			}
		  break;
		}

		case 'demanderModifierPegi': {
                $idPegiModif = $_POST['txtidPegi'];
                  // sert à créer un formulaire de modification pour ce genre
			break;
		}
			
		case 'validerModifierPegi': {
			$db->modifierPegi($_POST['txtidPegi'], $_POST['txtdescPegi'], $_POST['txtageLimite']); 
			$idPegiNotif = $_POST['txtidPegi']; // $idGenreNotif est l'idGenre du genre modifié
			$notification = 'Modifié';  // sert à afficher la modification réalisée dans la vue
			break;
		}

		case 'supprimerPegi': {
			$idPegi = $_POST['txtidPegi'];
			$db-> supprimerPegi($idPegi);
			break;
		}
	}
		
	// l' affichage des genres se fait dans tous les cas	
	$tbPegi  = $db->getLesPegis();		
	require 'vue/v_lesPegis.php';

	?>

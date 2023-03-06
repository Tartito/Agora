<?php

if (!isset($_POST['cmdAction'])){
    $action = 'demanderConnexion';
} else {
    $action = $_POST['cmdAction'];
}

switch ($action) {
    case 'demanderConnexion': {
        require 'vue/v_connexion.php';
        break;
    }
    case 'validerConnexion': {
        // Vérifier si l'utilisateur existe avec ce mot de passe
        $utilisateur = $db->getUnMembre($_POST['txtLogin'], $_POST['hdMdp']);

        // Si l'utilisateur n'existe pas
        if ($utilisateur == NULL) {
            $erreur = 'Faux pas bon .';
            require 'vue/v_connexion.php';
        } else {
            // Créer trois variables de session pour id utilisateur, nom et prénom
            $_SESSION['idUtilisateur'] = $utilisateur->idMembre;
            $_SESSION['nomUtilisateur'] = $utilisateur->nomMembre;
            $_SESSION['prenomUtilisateur'] = $utilisateur->prenomMembre;

            // Redirection du navigateur vers la page d'accueil
            header('Location: index.php');
            exit;
        }
        break;
    }
}

?>
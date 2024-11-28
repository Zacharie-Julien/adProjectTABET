<?php

function gestionUserControleur($twig, $pdo)
{
    $utilisateurModele = new Utilisateur($pdo);

    try {
        $utilisateurs = $utilisateurModele->select();
    } catch (Exception $e) {
        echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
        return;
    }

    echo $twig->render('gestionUser.html.twig', ['utilisateurs' => $utilisateurs]);
}

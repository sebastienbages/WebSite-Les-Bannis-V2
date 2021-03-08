<?php

    //CONNEXION BDD
    require('../../fonctions/db_connect.php');
    $bdd = db_connect();

    //REQUETES
    $ajout = $bdd->prepare('INSERT INTO quest(titre, article, image, date_ajout) VALUE (:titre, :article, :image, NOW())');

    //VARIABLES POST PROTEGEES
    $titre = htmlspecialchars($_POST['titre']);
    $article = nl2br(htmlspecialchars($_POST['article']));
    $img = htmlspecialchars($_POST['img']);

    //AJOUT BASE DE DONNEE
    if (isset($_POST['titre']) OR isset($_POST['article']) OR isset($_POST['img']))
    {
        $ajout->execute(array(
            'titre' => $titre,
            'article' => $article,
            'image' => $img
        ));
        $ajout->closeCursor();
        return http_response_code(200);
    }
    else
    {
        return http_response_code(400);
    }

?>
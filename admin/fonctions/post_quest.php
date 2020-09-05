<?php

//Auteur : Sébastien Bages
//Créé le : 30/09/2019
//Modifié le : 30/09/19


//CONNEXION BDD
require('../../fonctions/db_connect.php');
$bdd = db_connect();

//REQUETES
$ajout = $bdd->prepare('INSERT INTO quest(titre, article, auteur, image, date_ajout) VALUE (:titre, :article, :auteur, :image, NOW())');

//VARIABLES POST PROTEGEES
$titre = htmlspecialchars($_POST['titre']);
$article = nl2br(htmlspecialchars($_POST['article']));
$auteur = htmlspecialchars($_POST['auteur']);
$img = htmlspecialchars($_POST['img']);

//AJOUT BASE DE DONNEE
if (isset($_POST['titre']) OR isset($_POST['article']) OR isset($_POST['auteur']))
{
    $ajout->execute(array(
        'titre' => $titre,
        'article' => $article,
        'auteur' => $auteur,
        'image' => $img,
    ));

    $ajout->closeCursor();

    header('Location: ../view/admin_quest.php?msg=2');
}
else
{
    header('Location: ../view/admin_quest.php?msg=1');
}


?>
<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Quêtes';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Présentation des quêtes disponibles sur la terre des Bannis.';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/quest.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/quest_responsive.css';

//CONNEXION BDD
require("../fonctions/db_connect.php");
$bdd = db_connect();

//REQUETE BDD
require("../fonctions/request_quest.php");
$ajout = request_quest($bdd);

?>

<?php ob_start(); ?>

<div id="title">

<h1 id="main_title" class="center white">quêtes</h1>

</div>

<div id="triangle"></div>

<section id="section_quest">

<?php

    while ($donnees = $ajout->fetch())
    {
    echo 	'<article class="center">
                <h2 class="white">' . $donnees['titre'] . '</h2>
                <p class="white">' . $donnees['article'] . '</p>
                <img src="' . $donnees['image'] . '">
        
            </article>';
    }

?>

<h2 id="h2_end" class="center white">Et bien d'autres...</h2>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>

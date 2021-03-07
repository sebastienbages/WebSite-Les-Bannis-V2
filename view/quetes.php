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
require("../fonctions/requests.php");
$ajout = request_quest($bdd);

?>

<?php ob_start(); ?>

<div id="title">

<h1 id="main_title" class="center white hyborian">quêtes</h1>

</div>

<div id="triangle"></div>

<section id="section_quest">

<?php

    while ($donnees = $ajout->fetch())
    {
        if ($donnees['titre'] != null && $donnees['article'] != null && $donnees['image'] != null) {
            echo 	'<article class="center">
                        <h2 class="white">' . $donnees['titre'] . '</h2>
                        <p class="white">' . $donnees['article'] . '</p>
                        <img class="img-quest" src="' . $donnees['image'] . '">
                    </article>';
        }
        elseif ($donnees['titre'] != null && $donnees['article'] == null && $donnees['image'] == null) {
            echo 	'<article class="center">
                        <h2 class="white">' . $donnees['titre'] . '</h2>
                    </article>';
        }
        elseif ($donnees['titre'] != null && $donnees['article'] != null && $donnees['image'] == null) {
            echo 	'<article class="center">
                        <h2 class="white">' . $donnees['titre'] . '</h2>
                        <p class="white">' . $donnees['article'] . '</p>
                    </article>';
        }
        elseif ($donnees['titre'] != null && $donnees['article'] == null && $donnees['image'] != null) {
            echo 	'<article class="center">
                        <h2 class="white">' . $donnees['titre'] . '</h2>
                        <img class="img-quest" src="' . $donnees['image'] . '">
                    </article>';
        }
        elseif ($donnees['titre'] == null && $donnees['article'] != null && $donnees['image'] == null) {
            echo 	'<article class="center">
                        <p class="white">' . $donnees['article'] . '</p>
                    </article>';
        }
        elseif ($donnees['titre'] == null && $donnees['article'] != null && $donnees['image'] != null) {
            echo 	'<article class="center">
                        <p class="white">' . $donnees['article'] . '</p>
                        <img class="img-quest" src="' . $donnees['image'] . '">
                    </article>';
        }
        elseif ($donnees['titre'] == null && $donnees['article'] == null && $donnees['image'] != null) {
            echo 	'<article class="center">
                        <img class="img-quest" src="' . $donnees['image'] . '">
                    </article>';
        }
    }

?>

<h2 id="h2_end" class="center white">Et plein d'autres...</h2>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>

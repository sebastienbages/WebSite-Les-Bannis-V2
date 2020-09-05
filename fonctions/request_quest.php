<?php

function request_quest($bdd) {

    $ajout = $bdd->query('SELECT id, titre, article, auteur, image, date_ajout FROM quest');

    return $ajout;

}

?>
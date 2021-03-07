<?php

    //AJOUT IMAGE : GESTION DES MESSAGES D'ERREUR
    if (isset($_GET['add']))
    {
        if ($_GET['add'] == 1)
        {
            echo '<p class="center white shadow-red message">Erreur envoi ou fichier inexistant !</p>';
        }

        if ($_GET['add'] == 2)
        {
            echo '<p class="center white shadow-red message">La taille du fichier est trop élévée !</p>';
        }

        if ($_GET['add'] == 3)
        {
            echo '<p class="center white shadow-red message">L\'extension du fichier n\'est pas autorisée !</p>';
        }

        if ($_GET['add'] == 4)
        {
            echo '<p class="center white shadow-green message">Le fichier a été correctement envoyé !</p>';
        }
    }

?>
<?php

    //AJOUT IMAGE : GESTION DES MESSAGES D'ERREUR
    if (isset($_GET['add']))
    {
        if ($_GET['add'] == 1)
        {
            echo '<p class="center white shadow-red">Erreur envoi ou fichier inexistant !</p>';
        }

        if ($_GET['add'] == 2)
        {
            echo '<p class="center white shadow-red">La taille du fichier est trop élévée !</p>';
        }

        if ($_GET['add'] == 3)
        {
            echo '<p class="center white shadow-red">L\'extension du fichier n\'est pas autorisée !</p>';
        }

        if ($_GET['add'] == 4)
        {
            echo '<p class="center white shadow-green">Le fichier a été correctement envoyé !</p>';
        }
        if ($_GET['add'] == 5)
        {
            echo '<p class="center white shadow-red">La résolution du fichier est incorrecte !</p>';
        }
    }

?>
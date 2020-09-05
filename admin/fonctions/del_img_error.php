<?php

    //SUPPRESSION IMAGES : GESTION DES MESSAGES D'ERREUR
    if (isset($_GET['del']))
    {
        if ($_GET['del'] == 1)
        {
            echo '<p class="center white shadow-green">Suppression effectuée avec succés !';
        }

        if ($_GET['del'] == 2)
        {
            echo '<p class="center white shadow-red">Erreur de suppression ou fichier inexistant !';
        }
    }

?>
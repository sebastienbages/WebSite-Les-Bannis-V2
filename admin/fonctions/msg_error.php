<?php

    function msg_add_quest($msg)
    {
        if (isset($msg)) 
        {
            switch ($msg)
            {
                case 1 :
                    echo ('<p class="shadow-red">Erreur d\'envoi de la quête !</p>');
                    break;
                case 2 :
                    echo('<p class="shadow-green">Quête ajoutée avec succés !</p>');
                    break;
            }
        }
    }

    function msg_del_quest($msg)
    {
        if (isset($msg)) 
        {
            switch ($msg)
            {
                case 3 :
                    echo('<p class="shadow-green">Quête supprimée avec succés !</p>');
                    break;
                case 4 :
                    echo('<p class="shadow-red">Erreur suppression de quête !</p>');
                    break;
            }
        }
    }

    function msg_add_rule($msg)
    {
        if (isset($msg)) 
        {
            switch ($msg)
            {
                case 1 :
                    echo('<p class="shadow-red white msg-error">Petit Malin ! Et non !</p>');
                    break;
                case 2 :
                    echo('<p class="shadow-red white msg-error">Erreur d\'envoi, veuillez réessayer !</p>');
                    break;
            }
        }
    }

    function msg_maj_adresse($msg)
    {
        if (isset($msg)) 
        {
            switch ($msg)
            {
                case 1 :
                    echo('<p class="shadow-green white center">Mise à jour effectuée !</p>');
                    break;
                case 2 :
                    echo('<p class="shadow-red white center">Erreur d\'envoi, veuillez réessayer !</p>');
                    break;
            }
        }
    }

?>
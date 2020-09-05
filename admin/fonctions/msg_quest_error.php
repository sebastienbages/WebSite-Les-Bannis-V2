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

?>
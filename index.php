<?php

    //GESTION DE LA PAGE DEMANDEE
    if (isset($_GET['page'])) 
    {
        switch ($_GET['page'])
        {
            //PAGE CITE
            case 'cite':
                header('Location: cite.html');
                break;
            //PAGE STAFF
            case 'contact':
                header('Location: contact.html');
                break;
            default:
                header('Location: accueil.html');
                break;
        }
    }
    else
    {
        //ENVOI VERS LA PAGE D'ACCUEIL
        header('Location: accueil.html');
    }

?>
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
            //PAGE QUETES
            case 'quetes':
                header('Location: quetes.html');
                break;
            //PAGE REGLES
            case 'regles':
                header('Location: regles.html');
                break;
            //PAGE STAFF
            case 'staff':
                header('Location: staff.html');
                break;
        }
    }
    else
    {
        //ENVOI VERS LA PAGE D'ACCUEIL
        header('Location: accueil.html');
    }

?>
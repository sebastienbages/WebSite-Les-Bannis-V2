<?php
    if (isset($_GET['page'])) 
    {
        switch ($_GET['page'])
        {
            case 'cite':
                header('Location: capitale.html');
                break;
            case 'contact':
                header('Location: contact.html');
                break;
            case 'reputation':
                header('Location: reputation.html');
                break;
            case 'topserver':
                header('Location: topserveur.html');
                break;
            default:
                header('Location: accueil.html');
                break;
        }
    }
    else
    {
        header('Location: accueil.html');
    }
?>
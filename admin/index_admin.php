<?php

    //GESTION DE LA PAGE DEMANDEE
    if (isset($_GET['page'])) 
    {
        switch ($_GET['page'])
        {
            //PAGE GESTION IMAGES
            case 'img_admin':
                header('Location: view/admin_img.php');
                break;
            //PAGE QUETES
            case 'quetes_admin':
                header('Location: view/admin_quest.php');
                break;
        }
    }
    else
    {
        //ENVOI VERS LA PAGE D'ACCUEIL
        header('Location: view/accueil_admin.php');
    }

?>
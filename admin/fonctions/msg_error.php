<?php

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
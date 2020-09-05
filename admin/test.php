<?php

//REPERTOIRE(S)
$dir= '../img/upload';
$dir_two = '../img/quest';

function liste_image($dir)
{
    //Liste les fichiers du répertoire avec leurs chemins relatif
    $path = glob($dir . '/*');

    foreach ($path as $value)
    {
        //Récupère que le nom du fichier uniquement et l'extension
        $file = pathinfo($value);
        $file = $file['basename'];

        echo '<img src="' . $value . '">';
        echo '<p>' . $file . '</p>';
    }
    return;
}

liste_image($dir);



?>
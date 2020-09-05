<?php

//Auteur : Sébastien Bages
//Créé le : 01/10/2019
//Modifié le : 01/10/19


//Supression du fichier

if ($_POST['del'])
{
    $delete = $_POST['del'];

    unlink($delete);

    //Message de confirmation
    header('Location: ../view/admin_img.php?del=1');
}
else
{
    //Message d'erreur
    header('Location: ../view/admin_img.php?del=2');
}

?>
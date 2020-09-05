<?php

//Auteur : Sébastien Bages
//Créé le : 30/09/2019
//Modifié le : 15/12/19


//Variables

$file = $_FILES['image'];
$file_error = $_FILES['image']['error'];
$file_size = $_FILES['image']['size'];
$file_name = $_FILES['image']['name'];
$file_tmp_name = $_FILES['image']['tmp_name'];
$file_resolution = getimagesize($file_tmp_name);
$largeur = $file_resolution[0];
$hauteur = $file_resolution[1];

$infofichier = pathinfo($file_name);
$extension = $infofichier['extension'];
$extension_autorisees = array('jpg', 'jpeg', 'png');

$name = basename($file_name);
$now = date("dmY_His");
$newname = $now . "_" . $name;

//Test présence du fichier
if (isset($file) AND $file_error == 0)
{
    //Test de la taille du fichier (<350Ko)
    if ($file_size <= 350000)
    {
        if ($largeur == 768 AND $hauteur == 432)
        {
            //Vérification extension fichier + traitement
            if (in_array($extension, $extension_autorisees))
            {
                move_uploaded_file($file_tmp_name, "../../img/quest/$newname");

                header('Location: ../view/admin_img.php?add=4');

            }
            else
            {
                header('Location: ../view/admin_img.php?add=3');
            }
        }
        else
        {
            header('Location: ../view/admin_img.php?add=5');
        }
    }
    else
    {
        header('Location: ../view/admin_img.php?add=2');
    }
}
else
{
    header('Location: ../view/admin_img.php?add=1');
}

?>
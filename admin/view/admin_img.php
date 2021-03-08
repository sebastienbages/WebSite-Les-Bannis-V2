<?php

//TITRE DE LA PAGE (SEO)
$title = 'LES BANNIS - Gestion images';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/admin_img.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive = '../css/admin_img_responsive.css';

//REPERTOIRE DES IMAGES
$dir= '../../img/quest';
//Liste les fichiers du répertoire avec leurs chemins relatif
$path = glob($dir . '/*');

?>

<?php ob_start(); ?>

<p id="return" class="center"><a href="../index_admin.php" id="return_a" class="uppercase">Retour vers accueil admin</a></p>

<div id="post" class="center">

    <h1 class="white center shadow-red">Ajouter une image</h1>

    <form action="../fonctions/post_img.php" method="post" enctype="multipart/form-data" class="center">
        <input type="file" name="image" id="file"><br>
        <label for="image" id="image" class="white">(.jpg, .jpeg ou .png uniquement et 5Mo max)</label><br>
        <input type="submit" value="ENVOYER" id="submit" class="btn btn-danger">
    </form>

</div>

<div id="gestion">

    <h1 id="list" class="white center uppercase shadow-red">Liste des images</h1>

    <?php
        
        foreach ($path as $value)
        {
            //Récupère que le nom du fichier uniquement et l'extension
            $file = pathinfo($value);
            $file = $file['basename'];

            echo    '<div class="list_image mb-2">
                        <img src="' . $value . '">
                        <p class="center white">' . $file . '</p>
                        <form action="#" method="post" class="3">
                            <input type="text" name="del" class="hidden" value="' . $value . '" required>
                            <input type="submit" value="Supprimer" class="btn btn-outline-danger btn-del-image">
                        </form>
                    </div>';
        }
    
    ?>

</div>

<script src="../js/del-image.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
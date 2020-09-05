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
        <label for="image" id="image" class="white">(.jpg, .jpeg ou .png uniquement, inférieur à 300Ko et de résolution 768x432)</label><br>
        <input type="submit" value="ENVOYER" id="submit">
    </form>

    <?php require('../fonctions/add_img_error.php'); ?>

</div>

<div id="del">

    <h1 class="white center uppercase shadow-red">Supprimer une image</h1>

    <form action="../fonctions/del_img.php" method="post" class="center">
        <select name="del">

            <?php

                foreach ($path as $value)
                {
                    //Récupère que le nom du fichier uniquement et l'extension
                    $file = pathinfo($value);
                    $file = $file['basename'];

                    echo '<option value="' . $value . '">' . $file . '</option>';
                }

            ?>

        </select><br>

        <input type="submit" value="SUPPRIMER" id="submit">

    </form>

    <?php require('../fonctions/del_img_error.php'); ?>

</div>

<hr width="100%">

<div id="gestion">

    <?php
        
        echo '<h1 id="list" class="white center uppercase shadow-red">Liste des fichiers dans le repertoire "'.$dir.'/"</h1>';

        foreach ($path as $value)
        {
            //Récupère que le nom du fichier uniquement et l'extension
            $file = pathinfo($value);
            $file = $file['basename'];

            echo    '<div class="list_image">
                        <img src="' . $value . '">
                        <p class="center white">' . $file . '</p>
                    </div>';
        }
    
    ?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
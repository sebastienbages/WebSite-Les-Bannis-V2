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

//MESSAGE D'ERREUR
require('../fonctions/msg_error.php');

?>

<?php ob_start(); ?>

<p id="return" class="center"><a href="../index_admin.php" id="return_a" class="uppercase">Retour vers accueil admin</a></p>

<div id="post" class="center my-5">

    <h1 class="white center shadow-red my-2">Ajouter une image</h1>

    <form action="../fonctions/post_img.php" method="post" enctype="multipart/form-data" class="center">
        <input type="file" name="image" id="file"><br>
        <label for="image" id="image" class="white px-2">(.jpg, .jpeg ou .png uniquement, 500Ko max et 768px en largeur minimum)</label><br>
        <input type="submit" value="ENVOYER" id="submit" class="btn btn-danger">
    </form>

    <?php
        if (isset($_GET['add'])){
            msg_add_image($_GET['add']);
        }
    ?>

</div>


<div id="gestion" class="container mt-5">

    <h1 id="list" class="white center uppercase shadow-red">Liste des images</h1>

    <div class="row mt-4">

        <?php
            
            foreach ($path as $value)
            {
                //Récupère que le nom du fichier uniquement et l'extension
                $file = pathinfo($value);
                $file = $file['basename'];

                echo    '<div class="list-image col-sm mb-2 p-0 mx-auto">
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

</div>

<script src="../js/del-image.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
<?php

//TITRE DE LA PAGE (SEO)
$title = 'LES BANNIS - Gestion quetes';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/admin_quest.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive = '../css/admin_quest_responsive.css';

//REPERTOIRE DES IMAGES
$dir= '../../img/quest';
//Liste les fichiers du répertoire avec leurs chemins relatif
$path = glob($dir . '/*');

//MESSAGES D'ERREUR
require('../fonctions/msg_error.php');

//CONNEXION BDD
require('../../fonctions/db_connect.php');
$bdd = db_connect();
//REQUETE
require('../../fonctions/requests.php');
$request_id = request_quest($bdd);
$request_quest = request_quest($bdd);

?>

<?php ob_start(); ?>

<p id="return" class="uppercase"><a href="../index_admin.php" class="red">Retour vers accueil admin</a></p>

<div id="content" class="center">

    <h1 class="white center uppercase my-5">ajout d'une nouvelle quête</h1>

    <form action="../fonctions/post_quest.php" method="post" class="center">

        <label for="titre" class="white">Titre de l'article</label>
        <br>
        <input type="text" name="titre" id="titre">
        <br>
        <label for="article" class="white">Texte</label>
        <br>
        <textarea name="article" cols="30" rows="20" id="article"></textarea>
        <br>
        <label for="img" class="white">Image à associer</label>
        <br>
        <select name="img" id="image" class="mb-3">

            <?php

                foreach ($path as $value)
                {
                    //Récupère que le nom du fichier uniquement et l'extension
                    $file = pathinfo($value);
                    $file = $file['basename'];
                    //Modification de la source de l'image
                    $value = str_replace('../../', '../', $value);

                    echo '<option value="' . $value . '">' . $file . '</option>';
                }

            ?>

        </select>

        <br>
        <img src="" alt="" id="image-selected" class="w-25">
        <br>
        <input type="submit" value="ENREGISTRER" id="submit" class="btn btn-danger">
    </form>

    <?php 

        if (isset($_GET['msg'])) 
        {
            msg_add_quest($_GET['msg']);
        }
    
    ?>

</div>

<div id="gestion">

    <h1 class="white center uppercase">Liste des quêtes enregistrées</h1>

    <?php 

        if (isset($_GET['msg'])) 
        {
            msg_del_quest($_GET['msg']);
        }
    
    ?>

    <div class="table-responsive">
        <table class="white table table-bordered text-center w-75 mx-auto">
            <thead class="shadow-red">
                <tr>
                    <th class="align-middle">Position</th>
                    <th class="align-middle">Date de publication</th>
                    <th class="align-middle">Titre</th>
                    <th class="align-middle">Texte</th>
                    <th class="align-middle">Image</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while ($quest = $request_quest->fetch())
                        {

                            if ($quest['image'] != null) {
                                echo '<tr>
                                        <td class="center align-middle">'. $quest['id'] .'
                                            <form action="../fonctions/del_quest.php" method="post" class="3">
                                                <input type="text" name="id" class="hidden" value="' . $quest['id'] . '" required>
                                                <input type="submit" value="Supprimer" class="btn btn-outline-danger">
                                            </form>
                                        </td>
                                        <td class="center align-middle">' . $quest['date_ajout'] . '</td>
                                        <td class="center align-middle">' . $quest['titre'] . '</td>
                                        <td class="center align-middle">' . $quest['article'] . '</td>
                                        <td class="center align-middle"><img src="../' . $quest['image'] . '" class="w-50" /></td>
                                    </tr>';
                            }
                            else {
                                echo '<tr>
                                        <td class="center align-middle">'. $quest['id'] .'
                                            <form action="../fonctions/del_quest.php" method="post" class="3">
                                                <input type="text" name="id" class="hidden" value="' . $quest['id'] . '" required>
                                                <input type="submit" value="Supprimer" class="btn btn-outline-danger">
                                            </form>
                                        </td>
                                        <td class="center align-middle">' . $quest['date_ajout'] . '</td>
                                        <td class="center align-middle">' . $quest['titre'] . '</td>
                                        <td class="center align-middle">' . $quest['article'] . '</td>
                                        <td class="center align-middle"></td>
                                    </tr>';
                            }
                        }
                    ?>
            </tbody>
        </table>
    </div>
</div>

<script src="../js/image.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
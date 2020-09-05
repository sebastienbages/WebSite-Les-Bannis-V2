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
require('../fonctions/msg_quest_error.php');

//CONNEXION BDD
require('../../fonctions/db_connect.php');
$bdd = db_connect();
//REQUETE
require('../../fonctions/request_quest.php');
$request_id = request_quest($bdd);
$request_quest = request_quest($bdd);

?>

<?php ob_start(); ?>

<p id="return" class="uppercase"><a href="../index_admin.php" id="return_a" class="red">Retour vers accueil admin</a></p>

<div id="content" class="center">

    <h1 class="white center uppercase">ajout d'une nouvelle quête</h1>

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

        <select name="img" id="image" required>

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

        <p><em><a href="admin_img.php" class="red">Gestion des images</a></em></p>

        <br>

        <label for="auteur" class="white">Auteur</label>

        <br>

        <select name="auteur" id="auteur" required>

            <option value="Randgeur">Randgeur</option>
            <option value="McFreely">McFreely</option>

        </select>

        <br>

        <input type="submit" value="ENVOYER" id="submit">

    </form>

    <?php 

    if (isset($_GET['msg'])) 
    {
        msg_add_quest($_GET['msg']);
    }
    
    ?>

    <h1 class="white center uppercase">suppression d'une quête</h1>

    <form action="../fonctions/del_quest.php" method="post" class="center">

        <label for="id" class="white">ID de la Quête</label>

        <br>

        <select name="id" id="id">

        <?php
        
        while ($id = $request_id->fetch())
        {
            echo('<option value="' . $id['id'] . '">' . $id['id'] . '</option>');
        }
    
        ?>

        </select>

        <br>

        <input type="submit" value="SUPPRIMER" id="submit">

    </form>

    <?php 

    if (isset($_GET['msg'])) 
    {
        msg_del_quest($_GET['msg']);
    }
    
    ?>

</div>

<div id="gestion">

    <h1 class="white center uppercase">Liste des quêtes enregistrées</h1>

    <hr width="100%">

    <?php
        
        while ($quest = $request_quest->fetch())
        {
            echo '<article>
                    <h2 class="shadow-red white center">' . $quest['titre'] . '</h2>
                    <p class="shadow-red">ID = ' . $quest['id'] . '</p>
                    <p>' . $quest['article'] . '</p>
                    <p>Date d\'ajout : ' . $quest['date_ajout'] . '</p>
                    <p>Auteur : ' . $quest['auteur'] . '</p>
                    <p>' . $quest['image'] . '</p>
                    <hr width="100%">
                </article>';
        }
    
    ?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>